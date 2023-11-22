<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SesionController extends Controller
{
    public function loginAction($user, $psw, Request $req)
    {
        $session = $req->getSession();
        if ($user == 'rebe' && $psw == 'rebe') {

            $nombre = $session->get('user', '');
            $nombre = ''; //Sirve para vaciar la variable en caso de que ya hubiese una sesión iniciada
            $nombre = $user;
            $session->set('user', $nombre);

            $contraseña = $session->get('password', '');
            $contraseña = ''; //Sirve para vaciar la variable en caso de que ya hubiese una sesión iniciada
            $contraseña = $psw;
            $session->set('password', $contraseña);

            $response = $this->forward('AppBundle:Sesion:exito', array('test' => true));
            return $response;
        } else {
            return $this->redirectToRoute("ejerciciofinal1redirect");
        }
    }

    public function exitoAction($test, Request $req)
    {
        $session = $req->getSession();
        if ($test) {
            $nombre = $session->get('user', '');
            $contraseña = $session->get('password', '');
            $caracter = substr($contraseña, 0, 1);
            if (ctype_upper($caracter)) {
                throw $this->createNotFoundException('La contraseña debe empezar por minúscula');
            }
            return new Response('Inicio de sesión se realizó existosamnete. Bienvenido: ' . $nombre);
        }
    }

    public function falloAction()
    {
        return $this->render('noLogin/index.html.twig', array('mensaje' => 'El usuario y contraseña no son correctos'));
    }
}
