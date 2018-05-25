<?php
/**
 * Created by PhpStorm.
 * User: bor
 * Date: 22.05.2018
 * Time: 15:38
 */
// src/Controller/LuckyController.php
namespace App\Controller;

//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
     /**
      * @Route("/lucky/number")
      */
    public function number()
    {
        $number = mt_rand(0, 100);

//        return new Response(
//            '<html><body>Удачный номер: '.$number.'</body></html>'
//        );
        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }
}