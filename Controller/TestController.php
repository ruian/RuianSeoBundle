<?php

namespace Ruian\SeoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class TestController extends Controller
{
    public function indexAction()
    {
        return $this->render('RuianSeoBundle:Test:index.html.twig');
    }
}
