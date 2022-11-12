<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\EditUserType;
use App\Repository\UsersRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * @Route("/administration", name="admin_")
 */
class AdministrationController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('administration/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * Liste des utilisateurs du site
     *
     * @Route("/utilisateurs", name="utilisateurs")
     */
    public function usersList(UsersRepository $users)
    {
        return $this->render('administration/users.html.twig', [
            'users' => $users->findAll(),
        ]);
    }

    /**
     * @Route("/utilisateurs/modifier/{id}", name="modifier_utilisateur")
     */
    public function editUser(Users $user, Request $request, TranslatorInterface $translator)
    {
        $form = $this->createForm(EditUserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $message = $translator->trans('User modified successfully');
            $this->addFlash('message', $message);
            return $this->redirectToRoute('admin_utilisateurs');
        }

        return $this->render('administration/edituser.html.twig', [
            'userForm' => $form->createView(),
        ]);
    }
}
