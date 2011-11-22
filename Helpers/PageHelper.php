<?php

namespace Ruian\SeoBundle\Helpers;

use Symfony\Component\Templating\Helper\Helper;
use Ruian\SeoBundle\Services\PageService;

/**
* 
*/
class PageHelper extends Helper
{
    /**
     * Template service
     */
    protected $templating;

    /**
     * Template engine twig || php
     */
    protected $engine;

    /**
     * PageService
     */
    protected $page;

    public function __construct($templating, PageService $page, $engine)
    {
        $this->templating = $templating;
        $this->page = $page;
        $this->engine = $engine;
    }

    /**
     * @return string
     */
    public function renderMetas()
    {
        return $this->templating->render('RuianSeoBundle:default:_meta.html.'.$this->engine, array(
            'metas' => $this->page->getMetas(),
            'metas_http_equiv' => $this->page->getMetasHttpEquiv(),
        ));
    }

    /**
     * @return string
     */
    public function renderTitle()
    {
        return $this->templating->render('RuianSeoBundle:default:_title.html.'.$this->engine, array(
            'title' => $this->page->getTitle(),
        ));
    }

    public function getName()
    {
        return 'ruian.seo.page';
    }
}