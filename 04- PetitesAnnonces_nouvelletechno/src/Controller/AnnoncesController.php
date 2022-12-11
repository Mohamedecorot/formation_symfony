<?php

namespace App\Controller;

use App\Entity\Annonces;
use App\Form\AnnonceContactType;
use App\Repository\AnnoncesRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * @Route("/annonces", name="annonces_")
 */
class AnnoncesController extends AbstractController
{
    #[Route('/details/{slug}', name: 'details')]
    public function index($slug, AnnoncesRepository $annoncesRepository, Request $request, MailerInterface $mailer): Response
    {
        $annonce = $annoncesRepository->findOneBy(['slug' => $slug]);

        if(!$annonce){
            throw new NotFoundHttpException("Pas d'annonce trouvée");
        }

        $form = $this->createForm(AnnonceContactType::class);

        $contact = $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            // On créé le mail
            $email = (new TemplatedEmail())
                ->from($contact->get('email')->getData())
                ->to($annonce->getUsers()->getEmail())
                ->subject('Contact au sujet de votre annonce"' . $annonce->getTitle() . '"')
                ->htmlTemplate('emails/contact_annonce.html.twig')
                ->context([
                    'annonce' => $annonce,
                    'mail' => $contact->get('email')->getData(),
                    'message' => $contact->get('message')->getData(),
                ]);

                //on envoie le mail
                $mailer->send($email);

                //on confirme et on redirige
                $this->addFlash('message', 'Votre email a bien été envoyé');
                return $this->redirectToRoute('annonces_details', ['slug' => $annonce->getSlug()]);
        }

        return $this->render('annonces/details.html.twig', [
            'annonce' => $annonce,
            'form' => $form->createView()
        ]);
    }

    #[Route('/favoris/ajout/{id}', name: 'ajout_favoris')]
    public function ajoutFavoris(Annonces $annonce): Response
    {
        if(!$annonce){
            throw new NotFoundHttpException("Pas d'annonce trouvée");
        }
        $annonce->addFavori($this->getUser());

        $em = $this->getDoctrine()->getManager();
        $em->persist($annonce);
        $em->flush();

        return $this->redirectToRoute('app_home');
    }

    #[Route('/favoris/retrait/{id}', name: 'retrait_favoris')]
    public function retraitFavoris(Annonces $annonce): Response
    {
        if(!$annonce){
            throw new NotFoundHttpException("Pas d'annonce trouvée");
        }
        $annonce->removeFavori($this->getUser());

        $em = $this->getDoctrine()->getManager();
        $em->persist($annonce);
        $em->flush();

        return $this->redirectToRoute('app_home');
    }
}
