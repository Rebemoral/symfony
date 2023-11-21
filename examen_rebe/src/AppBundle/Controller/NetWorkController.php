<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NetWorkController extends Controller
{
    public function singinAction($name, Request $req){
        $sesion = $req->getSession();
        $nombre = $sesion->get('name', array());
        array_push($nombre, $name);
        $sesion->set('name',$nombre);
 
        return $this->render('sesion/index.html.twig', array('name'=>$name));
}
}
