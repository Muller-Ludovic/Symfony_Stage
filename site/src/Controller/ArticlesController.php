<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Entity\Comment;

class ArticlesController extends AbstractController
{
    /**
    * @Route("/articles", name="articles")
    */
   public function index(): Response
   {
        // Méthode findBy qui permet de récupérer tous les données Article
        $articles = $this->getDoctrine()->getRepository(Article::class)->findBy([], ['id' => 'asc']);
        $comments = $this->getDoctrine()->getRepository(Comment::class)->findBy([], ['id' => 'asc']);

       // Nous générons la vue de la page articles
       return $this->render('articles/index.html.twig', [
           'articles' => $articles,
           'comments' => $comments,
       ]);
   }

   /**
     * @Route("/article {id}", name="articles_show", methods={"GET"})
     */
    public function show(Article $articles): Response
    {
        $comments = $this->getDoctrine()->getRepository(Comment::class)->findBy([], ['id' => 'asc']);

        return $this->render('articles/show.html.twig', [
            'articles' => $articles,
            'comments' => $comments,
        ]);
    }
}