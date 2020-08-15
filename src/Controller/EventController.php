<?php
namespace App\Controller;

// We need to import Response, Route, Request and Controller if we want to use them
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventController extends Controller
{
   /**
    * @Route("/index", name="home_page")
    */
   public function showAction()
   {

   	 $events = $this->getDoctrine()->getRepository('App:Event')->findAll();
       return $this->render('event/index.html.twig', array('events'=>$events));
   }


   /**
    * @Route("/create", name="create_page")
    */
   public function createAction()
   {
       return $this->render('event/create_CR13.html.twig');
   }

   /**
    * @Route("/edit/{id}", name="edit_page")
    */
   public function editAction($id)
   {
       return $this->render('event/edit_CR13.html.twig');
   }

   /**
    * @Route("/details/{id}", name="details_page")
    */
   public function detailsAction($id)
   {
       return $this->render('event/details_CR13.html.twig');
   }
}
?>