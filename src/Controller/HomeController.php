<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route(path="/", name="home")
     */
    public function home()
    {
        return $this->render('home.html.twig');
    }
    /**
     * @Route(path="/exemple", name="exemple")
     */
    public function api()
    {
        return $this->render('api/index.html.twig');
    }
    /**
     * @Route(path="/source", name="source")
     */
    public function source()
    {
        return $this->render('source/index.html.twig');
    }
}