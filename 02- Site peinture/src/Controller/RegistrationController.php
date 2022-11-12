<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\RegistrationFormType;
use App\Repository\UsersRepository;
use App\Security\UsersAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Notifications\NouveauCompteNotification;
use App\Notifications\ActivationCompteNotification;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{
    /**
     * @var NouveauCompteNotification
     */
    private $notify_creation;

    /**
     * @var ActivationCompteNotification
     */
    private $notify_activation;

    /**
     * RegistrationController constructor.
     * @param NouveauCompteNotification $notify_creation
     */
    public function __construct(NouveauCompteNotification $notify_creation, ActivationCompteNotification $notify_activation)
    {
        $this->notify_creation = $notify_creation;
        $this->notify_activation = $notify_activation;
    }


    /**
     * @Route("/inscription", name="app_register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $userPasswordEncoder, GuardAuthenticatorHandler $guardHandler, UsersAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {
        $user = new Users();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
            $userPasswordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            // On génère un token et on l'enregistre
            $user->setActivationToken(md5(uniqid()));

            $entityManager->persist($user);
            $entityManager->flush();

            // do anything else you need here, like send an email
            // Envoie le mail d'inscription à l'administrateur
            $this->notify_creation->notify();

            // Envoie le mail d'activation
            $this->notify_activation->notify($user);


            // // On crée le message
            // $message = (new \Swift_Message('Activation de votre compte'))
            // // On attribue l'expéditeur
            // ->setFrom('votre@adresse.fr')
            // // On attribue le destinataire
            // ->setTo($user->getEmail())
            // // On crée le texte avec la vue
            // ->setBody(
            //     $this->renderView(
            //         'emails/activation.html.twig', ['token' => $user->getActivationToken()]
            //     ),
            //     'text/html'
            // )
            // ;
            // $mailer->send($message);


            return $guardHandler->authenticateUserAndHandleSuccess(
                $user,
                $request,
                $authenticator,
                'main' // firewall name in security.yaml
            );
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/activation/{token}", name="activation")
     */
    public function activation($token, UsersRepository $users)
    {
        // On recherche si un utilisateur avec ce token existe dans la base de données
        $user = $users->findOneBy(['activation_token' => $token]);

        // Si aucun utilisateur n'est associé à ce token
        if(!$user){
            // On renvoie une erreur 404
            throw $this->createNotFoundException('Cet utilisateur n\'existe pas');
        }

        // On supprime le token
        $user->setActivationToken(null);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        // On génère un message
        $this->addFlash('message', 'Utilisateur activé avec succès');

        // On retourne à l'accueil
        return $this->redirectToRoute('accueil');
    }
}
