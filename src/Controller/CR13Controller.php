<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CR13Controller extends AbstractController
{
    /**
     * @Route("index", name="index_page")
     */
    public function index() {

    	return $this->render('cr13/index.html.twig');

    }

    /**
     * @Route("create", name="create_page")
     */
    public function create() {

    	return $this->render('cr13/create_CR13.html.twig');

    }

 

   }