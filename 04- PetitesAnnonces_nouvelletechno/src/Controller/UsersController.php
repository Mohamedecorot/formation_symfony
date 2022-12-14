<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Images;
use App\Entity\Annonces;
use App\Form\AnnoncesType;
use App\Form\EditProfileType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UsersController extends AbstractController
{
    #[Route('/users', name: 'users')]
    public function index(): Response
    {
        return $this->render('users/index.html.twig');
    }

    #[Route('/users/annonces/ajout', name: 'users_annonces_ajout')]
    public function ajoutAnnonce(Request $request)
    {
        $annonce = new Annonces;

        $form = $this->createForm(AnnoncesType::class, $annonce);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
        // On récupère les images transmises
        $images = $form->get('images')->getData();

        // On boucle sur les images
        foreach($images as $image){
            // On génère un nouveau nom de fichier
            $fichier = md5(uniqid()).'.'.$image->guessExtension();

            // On copie le fichier dans le dossier uploads
            $image->move(
                $this->getParameter('images_directory'),
                $fichier
            );

            // On crée l'image dans la base de données
            $img = new Images();
            $img->setName($fichier);
            $annonce->addImage($img);
        }

            $annonce->setUsers($this->getUser());
            $annonce->setActive(false);

            $em = $this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();

            return $this->redirectToRoute('users');        }

        return $this->render('users/annonces/ajout.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/users/annonces/modifier/{id}', name: 'users_annonces_modifier')]
    public function modifierAnnonce(Request $request, Annonces $annonce)
    {
        $form = $this->createForm(AnnoncesType::class, $annonce);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
        // On récupère les images transmises
        $images = $form->get('images')->getData();

        // On boucle sur les images
        foreach($images as $image){
            // On génère un nouveau nom de fichier
            $fichier = md5(uniqid()).'.'.$image->guessExtension();

            // On copie le fichier dans le dossier uploads
            $image->move(
                $this->getParameter('images_directory'),
                $fichier
            );

            // On crée l'image dans la base de données
            $img = new Images();
            $img->setName($fichier);
            $annonce->addImage($img);
        }

            $annonce->setUsers($this->getUser());
            $annonce->setActive(false);

            $em = $this->getDoctrine()->getManager();
            $em->persist($annonce);
            $em->flush();

            return $this->redirectToRoute('users');        }

        return $this->render('users/annonces/ajout.html.twig', [
            'annonce' => $annonce,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/users/data', name: 'users_data')]
    public function usersData()
    {
        return $this->render('users/data.html.twig');
    }

    /**
     * @Route("/users/data/download", name="users_data_download")
     */
    public function usersDataDownload()
    {
        // On définit les options du PDF
        $pdfOptions = new Options();
        // Police par défaut
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->setIsRemoteEnabled(true);

        // On instancie Dompdf
        $dompdf = new Dompdf($pdfOptions);
        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE
            ]
        ]);
        $dompdf->setHttpContext($context);

        // On génère le html
        $html = $this->renderView('users/download.html.twig');

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // On génère un nom de fichier
        $fichier = 'user-data-'. $this->getUser()->getId() .'.pdf';

        // On envoie le PDF au navigateur
        $dompdf->stream($fichier, [
            'Attachment' => true
        ]);

        return new Response();
    }

    /**
     * @Route("/supprime/image/{id}", name="annonces_delete_image", methods={"DELETE"})
     */
    public function deleteImage(Images $image, Request $request){
        $data = json_decode($request->getContent(), true);

        // On vérifie si le token est valide
        if($this->isCsrfTokenValid('delete'.$image->getId(), $data['_token'])){
            // On récupère le nom de l'image
            $nom = $image->getName();
            // On supprime le fichier
            unlink($this->getParameter('images_directory').'/'.$nom);

            // On supprime l'entrée de la base
            $em = $this->getDoctrine()->getManager();
            $em->remove($image);
            $em->flush();

            // On répond en json
            return new JsonResponse(['success' => 1]);
        }else{
            return new JsonResponse(['error' => 'Token Invalide'], 400);
        }
    }


    #[Route('/users/profil/modifier', name: 'users_profil_modifier')]
    public function editProfile(Request $request)
    {
        $user = $this->getUser();
        $form = $this->createForm(EditProfileType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('message', 'Profil mis à jour');
            return $this->redirectToRoute('users');
        }

        return $this->render('users/editprofile.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/users/pass', name: 'users_pass_modifier')]
    public function editPass(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        if($request->isMethod('POST')){
            $em = $this->getDoctrine()->getManager();
            $user = $this->getUser();

            //On vérifie si les 2 mot de passe sont identitques
            if($request->request->get('pass') == $request->request->get('pass2')){
                $user->setPassword($passwordEncoder->encodePassword($user, $request->request->get('pass')));
                $em->flush();
                $this->addFlash('message', 'Mot de passe mise à jour avec succès');
                return $this->redirectToRoute('users');
            } else {
                $this->addFlash('error', 'Les deux mots de passe ne sont pas identiques');
            }
        }
        return $this->render('users/editpass.html.twig');
    }
}
