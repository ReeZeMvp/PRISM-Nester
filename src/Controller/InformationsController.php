<?php

namespace App\Controller;

use App\Entity\NetworksHistory;
use App\Entity\User;
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
        $json = file_get_contents('A:\subnet_scan_results.json');
            
        // Decode the JSON file 
        $json_data = json_decode($json,true); 
        
        // Display data 
        #print_r($json_data);

        #var_dump($json_data);

        #$informations = new Informations();
        #$user = new User();
        #$user->setUsername('agathe')
        #->setPassword('agathe');
        #$entityManagerInterface->persist($user);
        #$entityManagerInterface->flush();

        foreach($json_data as $host => $value) {
            $scan= new NetworksHistory();
            #var_dump($key);
            #var_dump($value);
            $status = $value['status'];
            $os = $value['os'];
            $mac = $value['mac'];
            $scan->setIp($host)
                ->setStatus($status)
                ->setOs($os)
                ->setMac($mac);
            $entityManagerInterface->persist($scan);
            $entityManagerInterface->flush();
            $entityManagerInterface->clear();
        }


        #return new Response('Saved new information with id '.$informations->getId());
        #return new Response('ok ' . $user->getId());
        return new Response('');
    }
}
