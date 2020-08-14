<?php

namespace App\Controller;

use App\Entity\Event;
use  Symfony\Bundle\FrameworkBundle\Controller \AbstractController;
use Symfony\Component \Routing\Annotation\Route;
use  Symfony\Component\HttpFoundation\Response ;

class EventController extends AbstractController
{
         /**
    * @Route("/index", name="indexAction")
    */ 
        public  function indexAction()
        {
            $events = $this->getDoctrine()
                ->getRepository(Event::class)
                ->findAll(); // this variable $products will store the result of running a query to find all the products
             return $this->render('event/index.html.twig', array("events"=>$events)); // i send the variable that have all the products as an array of objects to the index.html.twig page
        }
   }







// class EventController extends AbstractController
// {
//     /**
//      * @Route("/index", name="index")
//      */
//     public function index()
//     {
//         return $this->render('event/index.html.twig', [
//             'controller_name' => 'EventController',
//         ]);
//     }
// }
