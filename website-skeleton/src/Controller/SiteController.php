<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    /**
     * @Route("/", name="site")
     */
    public function index(): Response
    {
        return $this->render('site/index.html.twig', [
            'controller_name' => 'Jamanim',
        ]);
    }

    /**
     * @Route("/serie", name="serie")
     */
    public function serie(): Response
    {
        return $this->render('site/serie.html.twig', [
        ]);
    }

    /**
     * @Route("/anime", name="anime")
     */
    public function anime(): Response
    {
        return $this->render('site/anime.html.twig', [
        ]);
    }

    /**
     * @Route("/compte", name="compte")
     */
    public function compte(): Response
    {
        return $this->render('site/compte.html.twig', [
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function about(): Response
    {
        return $this->render('site/about.html.twig', [
        ]);
    }
}
