<?php
namespace Ruian\SeoBundle\Services;

class PageService
{
    /**
     * String
     * Page title
     */
    protected $title;

    /**
     * Array
     * Page metas (Keywords, description, ...)
     */
    protected $metas = array();

    /**
     * Array
     * Page metas (Keywords, description, ...)
     */
    protected $metas_http_equiv = array();

    function __construct($title, $metas, $metas_http_equiv)
    {
        $this->title = $title;
        $this->metas = $metas;
        $this->metas_http_equiv = $metas_http_equiv;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return void
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return void
     * @param string $key
     * @param string $content
     */
    public function setMeta($key, $content)
    {
        $this->metas[$key] = $content;
    }

    /**
     * @return void
     * @param array $metas
     */
    public function setMetas(array $metas)
    {
        $this->metas = $metas;
    }

    /**
     * @return string
     * @param string $key
     */
    public function getMeta($key)
    {
        if (false === array_key_exists($key, $this->metas)) {
            return null;
        }

        return $this->metas[$key];
    }

    /**
     * @return array
     */
    public function getMetas()
    {
        return $this->metas;
    }

    /**
     * @return void
     * @param string $key
     * @param string $content
     */
    public function setMetaHttpEquiv($key, $content)
    {
        $this->metas_http_equiv[$key] = $content;
    }

    /**
     * @return void
     * @param array $metas_http_equiv
     */
    public function setMetasHttpEquiv(array $metas_http_equiv)
    {
        $this->metas_http_equiv = $metas_http_equiv;
    }

    /**
     * @return string
     * @param string $key
     */
    public function getMetaHttpEquiv($key)
    {
        if (false === array_key_exists($key, $this->metas_http_equiv)) {
            return null;
        }

        return $this->metas_http_equiv[$key];
    }

    /**
     * @return array
     */
    public function getMetasHttpEquiv()
    {
        return $this->metas_http_equiv;
    }
}