<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Response;
//use App\Entity\Slova;

class SlovaController extends Controller
{
    /**
     * @Route("/slova", name="slova")
     */
    public function index()
    {
/*
        $entityManager = $this->getDoctrine()->getManager();

        $slova = new Slova();
        $slova->setSlovo('Бог');

        $entityManager->persist($slova);
        $entityManager->flush();
*/
//        return new Response('Вставлено слово номер '.$slova->getId());

        return $this->render('slova/index.html.twig', [
            'controller_name' => 'SlovaController',
            'myname' => 'Вова',
        ]);
    }
}
