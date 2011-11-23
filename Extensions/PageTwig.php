<?php
namespace Ruian\SeoBundle\Extensions;

use Ruian\SeoBundle\Services\PageService;

/**
*  /!\ In construction
*/
class PageTwig extends \Twig_Extension
{
    /**
     * PageService
     */
    protected $page;

    /**
     * Twig_Environment
     */
    protected $environment;

    function __construct(PageService $page)
    {
        $this->page = $page;
    }

    public function initRuntime(\Twig_Environment $environment)
    {
        $this->environment = $environment;
    }

    public function getFunctions()
    {
        return array(
            'ruian_seo_title' => new \Twig_Function_Method($this, 'renderTitle', array('is_safe' => array('html'))),
            'ruian_seo_metas' => new \Twig_Function_Method($this, 'renderMetas', array('is_safe' => array('html'))),
        );
    }

    public function renderTitle()
    {   
        return $this->environment->render('RuianSeoBundle:Default:_title.html.twig', array(
            'title' => $this->page->getTitle(),
        ));
    }

    public function renderMetas()
    {   
        return $this->environment->render('RuianSeoBundle:Default:_meta.html.twig', array(
            'metas' => $this->page->getMetas(),
            'metas_http_equiv' => $this->page->getMetasHttpEquiv(),
        ));
    }

    public function getName()
    {
        return 'ruian_seo';
    }
}