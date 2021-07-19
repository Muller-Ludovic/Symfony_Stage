<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class UsersController extends AbstractController
{
    /**
    * @Route("/users", name="users")
    */
   public function index(): Response
   {
        // Méthode findBy qui permet de récupérer tous les données User
        $users = $this->getDoctrine()->getRepository(User::class)->findBy([], ['id' => 'asc']);

       // Nous générons la vue de la page user
       return $this->render('users/index.html.twig', [
           'users' => $users,
       ]);
   }
}