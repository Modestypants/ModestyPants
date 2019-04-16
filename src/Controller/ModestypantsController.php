<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModestypantsController extends AbstractController
{
    /**
     * @Route("/mode", name="mode")
     */
    public function index()
    {
        return $this->render('modestypants/index.html.twig', [
            'controller_name' => 'ModestypantsController',
        ]);
    }

    /**
     * @Route("/home", name="home")
     * @return Response
     */
    public function home(): Response
    {
        return $this->render('modestypants/home.html.twig');
    }

    /**
     * @Route("/asks", name="asks")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function asks()
    {

        return $this->render('modestypants/asks.html.twig');


    }

    /**
     * @Route("/looks", name="looks")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function looks()
    {

        return $this->render('modestypants/looks.html.twig');
    }

    /**
     * @Route("/portraits", name="portraits")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function portraits()
    {

        return $this->render('modestypants/portraits.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function contact()
    {

        return $this->render('modestypants/contact.html.twig');
    }

    /**
     * @Route("/story", name="story")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function story()
    {

        return $this->render('modestypants/story.html.twig');
    }

    /**
     * @Route("/about", name="about")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function about()
    {

        return $this->render('modestypants\about.html.twig');
    }



}
