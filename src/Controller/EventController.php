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

        /**
    * @Route("/create", name="createAction")
    */
   public function createAction()
   {  
       
        // you can fetch the EntityManager via $this->getDoctrine()
       // or you can add an argument to your action: createAction(EntityManagerInterface $em)
       $em = $this->getDoctrine()->getManager();
       $event = new Event(); // here we will create an object from our class Product.
       $event->setName( 'Violinkonzert'); // in our Product class we have a set function for each column in our db
       $event->setAddress("Violinstraße 4, 1547 Violinhausen");
       $event->setCapacity(50);
       $event->setDate("2020-09-25 19:30:00");
       $event->setDescription("Mozartklänge");
       $event->setEmail("violine@violine.at");
       $event->setImage("https://images.pexels.com/photos/210854/pexels-photo-210854.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
       $event->setPhone("0459861234");
       $event->setURL("www.violinenklaenge.at");

       // tells Doctrine you want to (eventually) save the Product (no queries yet)
       $em->persist($event);
        // actually executes the queries (i.e. the INSERT query)
       $em->flush();
       return  new Response('Saved new event with id '.$event->getId());
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
