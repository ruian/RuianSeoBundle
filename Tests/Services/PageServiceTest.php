<?php
namespace Ruian\SeoBundle\Tests\Services;

use Ruian\SeoBundle\Services\PageService;

class PageServiceTest extends \PHPUnit_Framework_TestCase
{

    public function testArgs()
    {
        $title = 'My title';

        $metas = array(
            'foo' => 'bar'
        );

        $metas_http_equiv = array(
            'foo' => 'bar'
        );

        $pageService = new PageService($title, $metas, $metas_http_equiv, null);

        $this->assertEquals($title, $pageService->getTitle());
        $this->assertEquals($metas, $pageService->getMetas());
        $this->assertEquals($metas_http_equiv, $pageService->getMetasHttpEquiv());
    }
}
