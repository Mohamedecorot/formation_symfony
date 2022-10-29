<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="app_blog")
     */
    public function index(ArticleRepository $repo): Response
    {
        // puisqu'en parameètre on a mit ArticleRepository $repo (C'est de l'injection de dépendance),
        // on a plus besoin de crée le repo ainsi :
        // $repo = $this->getDoctrine()->getRepository(Article::class);
        $articles = $repo->findAll();

        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('blog/home.html.twig');
    }

    /**
     * @Route("/blog/{id}", name="blog_show")
     */
    public function show(Article $article): Response
    {
        // $repo = $this->getDoctrine()->getRepository(Article::class);
        // $article = $repo->find($id);

        return $this->render('blog/show.html.twig', [
            'article' => $article
        ]);
    }
}
