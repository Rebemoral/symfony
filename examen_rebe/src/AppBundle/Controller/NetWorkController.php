<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NetWorkController extends Controller
{
    public function singinAction($name, Request $req){
        $sesion = $req->getSession();
        $nombre = $sesion->get('name', array());
        $nombre = array();
        array_push($nombre, $name);
        $sesion->set('name',$nombre);
 
        return $this->render('sesion/index.html.twig', array('name'=>$name));
}

public function languageAction($locale, Request $req)
    {
        $session = $req->getSession();
        if ($locale == 'es' || $locale == 'fr' || $locale == 'en') {
            $idioma = $session->get('idioma', array());
            $idioma = array($locale);
            $session->set('idioma', $idioma);
        }
        $idiomaGuardado = $session->get('idioma', array());
        if (in_array('es', $idiomaGuardado)) {
            return $this->render('idioma/index.html.twig', array('saludo' => 'Hola'));
        } elseif (in_array('fr', $idiomaGuardado)) {
            return $this->render('idioma/index.html.twig', array('saludo' => 'Bonjour'));
        } else {
            return $this->render('idioma/index.html.twig', array('saludo' => 'Hello'));
        }
    }

public function profileAction(Request $req)
    {
        $session = $req->getSession();
        $nombre = $session->get('name', '');
        $idioma = $session->get('idioma', '');
 
        if (in_array('en', $idioma)) {
            return $this->render('bienvenida/inglesindex.html.twig', array('name' => implode($nombre)));
        } elseif (in_array('fr', $idioma)) {
            return $this->render('bienvenida/francesindex.html.twig', array('name' => implode($nombre)));
        } else {
            return $this->render('bienvenida/españolindex.html.twig', array('name' => implode($nombre)));
        }
    }
}
