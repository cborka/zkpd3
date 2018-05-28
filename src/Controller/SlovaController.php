<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
//use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\HttpFoundation\Response;

use App\Entity\Slova;

class SlovaController extends Controller
{
    /**
     * @Route("/slovo", name="slovo")
     */
    public function new(Request $request)
    {
        $slova = new Slova();
//        $slova->setSlovo('Бог');

        $form = $this->createFormBuilder($slova)
            ->add('slovo', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Скажите слово'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $slova = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();

            return $this->redirect('slovo_success/'.$slova->getSlovo());
//            return $this->redirectToRoute('slovo_success/'.$slova->getSlovo());
//            return $this->redirectToRoute($slova->getSlovo());
        }

//        $entityManager->persist($slova);
//        $entityManager->flush();

//        return new Response('Вставлено слово номер '.$slova->getId());
//        return $this->render('slova/index.html.twig', [
//           'controller_name' => 'SlovaController',
 //          'slovo' => $slova->getSlovo(),
 //       ]);
        return $this->render('slova/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/slovo_success/{slovo}", name="slovo_success")
     */
    public function slovo_success($slovo)
    {
//        $entityManager = $this->getDoctrine()->getManager();

//        $slova = new Slova();
//        $slova->setSlovo('Бог');

//        $entityManager->persist($slova);
//        $entityManager->flush();

        return new Response('Успех! Вставлено слово '. $slovo);

//        return $this->render('slova/index.html.twig', [
//            'controller_name' => 'SlovaController',
//            'slovo' => $slova->getSlovo(),
//        ]);
    }

    /**
     * @Route("/slova", name="slova")
     */
    public function index()
    {
//        $entityManager = $this->getDoctrine()->getManager();

        $slova = new Slova();
        $slova->setSlovo('Бог');

//        $entityManager->persist($slova);
//        $entityManager->flush();

//        return new Response('Вставлено слово номер '.$slova->getId());

        return $this->render('slova/index.html.twig', [
           'controller_name' => 'SlovaController',
                  'slovo' => $slova->getSlovo(),
        ]);
    }


}
