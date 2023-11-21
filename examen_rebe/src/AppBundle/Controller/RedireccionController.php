<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RedireccionController extends Controller
{
    public function indexAction(){
        return new Response('Satisfactory redirection');
    }
 
    public function internalRedirectAction(){
        return $this->redirectToRoute("redirect_index");
    }
    public  function internalRedirectPermanentAction(){
        return $this->redirectToRoute("redirect_index", array(), 301);
    }
    public function externalRedirectAction(){
        return $this->redirect("https://es.javascript.info/");
    }
}
