<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Client;

class ClientsController extends AbstractController
{
    /**
    * @Route("/clients", name="clients")
    */
   public function index(): Response
   {
        // Méthode findBy qui permet de récupérer tous les données Client
        $clients = $this->getDoctrine()->getRepository(Client::class)->findBy([], ['id' => 'asc']);

       // Nous générons la vue de la page client
       return $this->render('clients/index.html.twig', [
           'clients' => $clients,
       ]);
   }
}