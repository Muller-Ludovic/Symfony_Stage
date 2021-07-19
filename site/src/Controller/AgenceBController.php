<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\AgenceB;

class AgenceBController extends AbstractController
{
    /**
    * @Route("/agenceB", name="agenceB")
    */
   public function index(): Response
   {
        // Méthode findBy qui permet de récupérer tous les données Agence B
        $agenceB = $this->getDoctrine()->getRepository(AgenceB::class)->findBy([], ['id' => 'asc']);

       // Nous générons la vue de la page agenceB
       return $this->render('agence_b/index.html.twig', [
           'agenceB' => $agenceB,
       ]);
   }
}