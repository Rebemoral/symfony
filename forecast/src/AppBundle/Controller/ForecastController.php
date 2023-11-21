<?php
 
namespace AppBundle\Controller;
 
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
 
class ForecastController extends Controller{
 
    public function indexAction()
    {
        return new Response('hace mucho frio');
    }
    public function indexParamAction($weather){
        return new Response('<html><body>hace: ' . $weather. '</body></html>');
    }
    public function index2ParamsAction($weather, $temperature){
        return new Response('<html><body>Weather info: it\'s ' . $weather. ' hace una temperatura de '. $temperature . ' </body></html>');
    }
    public function indexRequestAction($weather, $temperature, Request $request){
        return new Response('<html><body>El tiempo en ' . $request->query->get('city') . ': Hace ' . $weather
        . ' y la temperatura es: ' . $temperature . ' ºC</body></html>');
    }
}