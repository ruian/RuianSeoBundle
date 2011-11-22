<?php

namespace Ruian\SeoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('RuianSeoBundle:Default:index.html.twig', array('name' => $name));
    }
}
