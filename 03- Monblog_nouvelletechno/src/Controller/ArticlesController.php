<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Entity\Commentaires;
use App\Form\CommentaireFormType;
use App\Form\AjoutArticleFormType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ArticlesController extends AbstractController
{
    /**
     * @Route("/articles", name="articles")
     */
    public function index(Request $request, PaginatorInterface $paginator) // Nous ajoutons les paramètres requis
    {
        // Méthode findBy qui permet de récupérer les données avec des critères de filtre et de tri
        $donnees = $this->getDoctrine()->getRepository(Articles::class)->findBy([], ['created_at' => 'desc']);

        $articles = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            4 // Nombre de résultats par page
        );

        return $this->render('articles/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @IsGranted("ROLE_USER")
     * @Route("/article/ajouter", name="ajout_article")
     */
    public function ajout(Request $request)
    {
        $article = new Articles();

        $form = $this->createForm(AjoutArticleFormType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $article->setUsers($this->getUser());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($article);
            $entityManager->flush();

            $this->addFlash('message', 'Votre article a bien été publié');
            return $this->redirectToRoute('actualites_articles');
        }

        return $this->render('articles/ajout.html.twig', [
            'articleForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/article/{slug}", name="article")
    */
    public function article($slug, Request $request){
        // On récupère l'article correspondant au slug
        $article = $this->getDoctrine()->getRepository(Articles::class)->findOneBy(['slug' => $slug]);
        $commentaires = $this->getDoctrine()->getRepository(Commentaires::class)->findBy([
            'articles' => $article,
            'actif' => 0
        ],['created_at' => 'desc']);

        if(!$article){
            // Si aucun article n'est trouvé, nous créons une exception
            throw $this->createNotFoundException('L\'article n\'existe pas');
        }

        // Nous créons l'instance de "Commentaires"
        $commentaire = new Commentaires();

        // Nous créons le formulaire en utilisant "CommentairesFormType" et on lui passe l'instance
        $form = $this->createForm(CommentaireFormType::class, $commentaire);

        // Nous récupérons les données
        $form->handleRequest($request);

        // Nous vérifions si le formulaire a été soumis et si les données sont valides
        if ($form->isSubmitted() && $form->isValid()) {
            // Hydrate notre commentaire avec l'article
            $commentaire->setArticles($article);

            // Hydrate notre commentaire avec la date et l'heure courants
            $commentaire->setCreatedAt(new \DateTime('now'));

            $doctrine = $this->getDoctrine()->getManager();

            // On hydrate notre instance $commentaire
            $doctrine->persist($commentaire);

            // On écrit en base de données
            $doctrine->flush();

            // On redirige l'utilisateur
            return $this->redirectToRoute('actualites_article', ['slug' => $slug]);
        }
        // Si l'article existe nous envoyons les données à la vue
        return $this->render('articles/article.html.twig', [
            'commentForm' => $form->createView(),
            'article' => $article,
            'commentaires' => $commentaires,
        ]);
    }
}