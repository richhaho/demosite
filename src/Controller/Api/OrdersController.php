<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class OrdersController extends AbstractController
{
    /**
     * @Route("/api/orders", name="api_orders",methods={"GET"})      
     */
    public function index(SerializerInterface $serializer)
    {
    	$orders = [];
    	if(file_exists('orders.json')){
    		$orders = file_get_contents('orders.json');	    		
    	}
       	//$orders = json_decode($orders);
       //return new JsonResponse($data, 200, array('Access-Control-Allow-Origin'=> '*'))
       	 return new Response($orders, 200, array('Access-Control-Allow-Origin'=> '*'));
		//return$this->handleView($this->view($orders));
        //return new JsonResponse($serializer->serialize($orders, 'json', ['groups' => ['orders']]), 200, ['orders'], true);
    }

}
