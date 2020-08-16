<?php
namespace App\Controller;

// We need to import Response, Route, Request and Controller if we want to use them
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Event;

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
    * @Route("/details/{id}", name="details_page")
    */
   public function detailsAction($id)
   {
       $event = $this->getDoctrine()->getRepository('App:Event')->find($id);
       return $this->render('event/details_CR13.html.twig', array('event' => $event));
   }


   /**
    * @Route("/create", name="create_page")
    */
   public function createAction(Request $request)
   {
       // Here we create an object from the class that we made
       $event = new Event;
/* Here we will build a form using createFormBuilder and inside this function we will put our object and then we write add then we select the input type then an array to add an attribute that we want in our input field */
       $form = $this->createFormBuilder($event)->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('date', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('image', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
         ->add('capacity', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
          ->add('url', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
           ->add('phone', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('email', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
             ->add('address', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
   ->add('save', SubmitType::class, array('label'=> 'Add Event', 'attr' => array('class'=> 'btn-light', 'style'=>'margin-bottom:15px')))
       ->getForm();
       $form->handleRequest($request);
       

       /* Here we have an if statement, if we click submit and if  the form is valid we will take the values from the form and we will save them in the new variables */
       if($form->isSubmitted() && $form->isValid()){
           //fetching data

           // taking the data from the inputs by the name of the inputs then getData() function
           $name = $form['name']->getData();
           $date = $form['date']->getData();
           $email = $form['email']->getData();
           $address = $form['address']->getData();
           $description = $form['description']->getData();
           $image = $form['image']->getData();
           $phone = $form['phone']->getData();
           $capacity = $form['capacity']->getData();
           $url = $form['url']->getData();
           
           
/* these functions we bring from our entities, every column have a set function and we put the value that we get from the form */
           $event->setName($name);
           $event->setDate($date);
           $event->setDescription($description);
           $event->setEmail($email);
           $event->setAddress($address);
           $event->setImage($image);
           $event->setPhone($phone);
           $event->setCapacity($capacity);
           $event->setURL($url);
           $em = $this->getDoctrine()->getManager();
           $em->persist($event);
           $em->flush();
           $this->addFlash(
                   'notice',
                   'Event Added'
                   );
           return $this->redirectToRoute('home_page');
       }
/* now to make the form we will add this line form->createView() and now you can see the form in create.html.twig file  */
       return $this->render('event/create_CR13.html.twig', array('form' => $form->createView()));
   }

   /**
    * @Route("/edit/{id}", name="edit_page")
    */
   public function editAction( $id, Request $request){
/* Here we have a variable todo and it will save the result of this search and it will be one result because we search based on a specific id */
   $event = $this->getDoctrine()->getRepository('App:Event')->find($id);
/* Now we will use set functions and inside this set functions we will bring the value that is already exist using get function for example we have setName() and inside it we will bring the current value and use it again */
           $event->setName($event->getName());
           $event->setDate($event->getDate());
           $event->setDescription($event->getDescription());
           $event->setImage($event->getImage());
           $event->setCapacity($event->getCapacity());
           $event->setURL($event->getURL());
           $event->setEmail($event->getEmail());
           $event->setPhone($event->getPhone());
           $event->setAddress($event->getAddress());
           
/* Now when you type createFormBuilder and you will put the variable todo the form will be filled of the data that you already set it */
       $form = $this->createFormBuilder($event)->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
       ->add('date', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
        ->add('image', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
         ->add('capacity', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
          ->add('url', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
           ->add('phone', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
            ->add('email', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
             ->add('address', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
   ->add('save', SubmitType::class, array('label'=> 'Update event', 'attr' => array('class'=> 'btn-light', 'style'=>'margin-botton:15px')))
       ->getForm();
       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid()){
           //fetching data
           $name = $form['name']->getData();
           $date = $form['date']->getData();
           $email = $form['email']->getData();
           $address = $form['address']->getData();
           $description = $form['description']->getData();
           $image = $form['image']->getData();
           $phone = $form['phone']->getData();
           $capacity = $form['capacity']->getData();
           $url = $form['url']->getData();

           $em = $this->getDoctrine()->getManager();

           $event = $em->getRepository('App:Event')->find($id);
           $event->setName($name);
           $event->setDate($date);
           $event->setDescription($description);
           $event->setEmail($email);
           $event->setAddress($address);
           $event->setImage($image);
           $event->setPhone($phone);
           $event->setCapacity($capacity);
           $event->setURL($url);
           
       
           $em->flush();
           $this->addFlash(
                   'notice',
                   'Event updated'
                   );
           return $this->redirectToRoute('home_page');
       }
       return $this->render('event/edit_CR13.html.twig', array('event' => $event, 'form' => $form->createView()));
   }


}
?>