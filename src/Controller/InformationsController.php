<?php

namespace App\Controller;

use App\Entity\Informations;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route; 

class InformationsController extends AbstractController
{
    #[Route('/informations', name: 'app_informations')]
    public function index(
        EntityManagerInterface $entityManagerInterface 
    ): Response
    {
        #return $this->render('informations/index.html.twig', [
        #    'controller_name' => 'InformationsController',
        #]);

        // Read the JSON file  
        $json = file_get_contents('A:\Work\B3-MSPR\XKeyscore-Harvester\subnet_scan_results.json'); 
            
        // Decode the JSON file 
        $json_data = json_decode($json,true); 
        
        // Display data 
        #print_r($json_data);
        $informations = new Informations();

        return new Response('Saved new information with id '.$informations->getId());
    }
}
