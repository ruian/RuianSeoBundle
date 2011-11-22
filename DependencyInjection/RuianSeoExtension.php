<?php

namespace Ruian\SeoBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class RuianSeoExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        
        if (true === array_key_exists('engine', $config)) {
            $container->setParameter('ruian.seo.engine', $config['engine']);
        } else {
            $container->setParameter('ruian.seo.engine', 'php');
        }

        if (true === array_key_exists('title', $config)) {
            $container->setParameter('ruian.seo.title', $config['title']);
        } else {
            $container->setParameter('ruian.seo.title', 'My website');
        }

        if (true === array_key_exists('metas', $config)) {
            $container->setParameter('ruian.seo.metas', $config['metas']);
        } else {
            $container->setParameter('ruian.seo.metas', array());
        }

        if (true === array_key_exists('metas_http_equiv', $config)) {
            $container->setParameter('ruian.seo.metas_http_equiv', $config['metas_http_equiv']);
        } else {
            $container->setParameter('ruian.seo.metas_http_equiv', array());
        }

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
