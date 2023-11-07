<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class RedirectController extends Controller{

    public function indexAction()
    {
    //replace this example code with whatevever you need
    return new Response('Redireccion satisfactoria');
    }
    public function internalRedirectAction(){
        return $this->redirectToRoute('redirect_index');
    }
    public function internalRedirectPermanentAction(){
        return $this->redirectToRoute('redirect_index', array(),301);    
    }
    public function externalRedirectAction(){
        return $this->redirect('http://elmundo.es');
    }
}


