<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\AgenceA;

class AgenceAController extends AbstractController
{
    /**
    * @Route("/agenceA", name="agenceA")
    */
   public function index(): Response
   {
        // Méthode findBy qui permet de récupérer tous les données Agence A
        $agenceA = $this->getDoctrine()->getRepository(AgenceA::class)->findBy([], ['id' => 'asc']);

       // Nous générons la vue de la page agenceA
       return $this->render('agence_a/index.html.twig', [
           'agenceA' => $agenceA,
       ]);
   }
}