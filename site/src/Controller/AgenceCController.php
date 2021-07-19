<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\AgenceC;

class AgenceCController extends AbstractController
{
    /**
    * @Route("/agenceC", name="agenceC")
    */
   public function index(): Response
   {
        // Méthode findBy qui permet de récupérer tous les données Agence C
        $agenceC = $this->getDoctrine()->getRepository(AgenceC::class)->findBy([], ['id' => 'asc']);

       // Nous générons la vue de la page agenceC
       return $this->render('agence_c/index.html.twig', [
           'agenceC' => $agenceC,
       ]);
   }
}