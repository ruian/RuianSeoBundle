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
     * String
     * Page title_prefix
     */
    protected $title_prefix;

    /**
     * String
     * Page title_suffix
     */
    protected $title_suffix;

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

    function __construct($title, $title_prefix, $title_suffix, $metas, $metas_http_equiv)
    {
        $this->title = $title;
        $this->title_prefix = $title_prefix;
        $this->title_suffix = $title_suffix;
        $this->metas = $metas;
        $this->metas_http_equiv = $metas_http_equiv;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title_prefix . $this->title . $this->title_suffix;
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
     * @return string
     */
    public function getTitlePrefix()
    {
        return $this->title_prefix;
    }

    /**
     * @return void
     * @param string $title_prefix
     */
    public function setTitlePrefix($title_prefix)
    {
        $this->title_prefix = $title_prefix;
    }

    /**
     * @return string
     */
    public function getTitleSuffix()
    {
        return $this->title_suffix;
    }

    /**
     * @return void
     * @param string $title_suffix
     */
    public function setTitleSuffix($title_suffix)
    {
        $this->title_suffix = $title_suffix;
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