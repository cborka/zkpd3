<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Zkpd3Controller extends Controller
{
    /**
     * @Route("/zkpd3", name="zkpd3")
     */
    public function index()
    {
        return $this->render('zkpd3/index.html.twig', [
            'controller_name' => 'Zkpd3Controller',
        ]);
    }
}
