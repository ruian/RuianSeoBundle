<?php
namespace Ruian\SeoBundle\Extensions;

use Ruian\SeoBundle\Services\PageService;

/**
*  /!\ In construction
*/
class PageTwig extends \Twig_Extension
{
    /**
     * Template engine twig || php
     */
    protected $engine;

    /**
     * PageService
     */
    protected $page;

    function __construct(PageService $page, $engine)
    {
        $this->page = $page;
        $this->engine = $engine;
    }

    public function initRuntime(\Twig_Environment $environment)
    {
        $this->environment = $environment;
    }

    public function getFunctions()
    {
        return array(
            'ruian_seo' => new \Twig_Function_Method($this, 'ruian_seo', array('is_safe' => array('html')))
        );
    }

    public function ruian_seo()
    {
        //var_dump($this->templating);
        return 'test';
    }

    public function getName()
    {
        return 'ruian_seo';
    }
}