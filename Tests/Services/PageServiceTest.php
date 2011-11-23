<?php
namespace Ruian\SeoBundle\Tests\Services;

use Ruian\SeoBundle\Services\PageService;

class PageServiceTest extends \PHPUnit_Framework_TestCase
{

    public function testArgs()
    {
        $title_prefix = '[FR] ';
        $title = 'My title';
        $title_suffix = ' - jgalenski.com';

        $metas = array(
            'foo' => 'bar'
        );

        $metas_http_equiv = array(
            'foo' => 'bar'
        );

        $pageService = new PageService($title, $title_prefix, $title_suffix, $metas, $metas_http_equiv, null);

        $this->assertEquals($title_prefix . $title . $title_suffix, $pageService->getTitle());
        $this->assertEquals($metas, $pageService->getMetas());
        $this->assertEquals($metas_http_equiv, $pageService->getMetasHttpEquiv());
    }
}
