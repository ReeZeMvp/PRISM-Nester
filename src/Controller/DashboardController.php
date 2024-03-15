<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class DashboardController extends AbstractController{

    #[Route('/', name: 'dashboard')]
    public function index (Request $request): Response {

        // Read the JSON file
        $json = file_get_contents('A:\Work\B3-MSPR\XKeyscore-Harvester\subnet_scan_results.json');

        // Decode the JSON file
        $json_data = json_decode($json,true);

        // Display data
        #print_r($json_data);
        $listed = 3;
        $nesterVersion = '1.7.10';
        $harvesters[0] = array('name'=>'XKeyscore-Harvester', 'id'=>1, 'lastScan'=>date("d/m/Y"));
        $harvesters[1] = array('name'=>'(ExempleAutreClient-Harvester)', 'id'=>2, 'lastScan'=>date("d/m/Y"));
        $harvesters[2] = array('name'=>'(ExempleAutreClient-Harvester)', 'id'=>3, 'lastScan'=>date("d/m/Y"));

        return $this->render('dashboard/index.html.twig', [
            'json' => $json_data,
            'listed' => $listed,
            'nesterVersion' => $nesterVersion,
            'harvesters' => $harvesters
        ]);
        #return new Response('test' . $request->query->get('name', 'nobody'));
        #return $this->redirect();
    }

    #[Route('/harvester/{slug}', name: 'harvester.show')]
    public function show(Request $request) {

        // Read the JSON file
        $json = file_get_contents('A:\subnet_scan_results.json');

        // Decode the JSON file
        $json_data = json_decode($json,true);


        return $this->render('dashboard/show.html.twig', [
            'hosts' => $json_data
            ]);
        #return new Response('test');
    }

}


//class DashboardController extends AbstractController
//{
//    #[Route('/dashboard', name: 'app_dashboard')]
//    public function index(): Response
//    {
//        return $this->render('dashboard/index.html.twig', [
//            'controller_name' => 'DashboardController',
//        ]);
//    }
//}
