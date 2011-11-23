<?php

namespace Ruian\SeoBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('ruian_seo');

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        // Wish : Provide a config like this
        // ruian_seo:
        //     engine: twig or php
        //     title: my title
        //     metas:
        //         keywords: some keywords
        //         description: Some description
        //         author: Website author
        //         ...: ...
        $rootNode
            ->children()
                ->scalarNode('engine')->defaultValue('php')->end()
            ->end()
            ->children()
                ->scalarNode('title')->defaultNull()->end()
            ->end()
            ->children()
                ->scalarNode('title_suffix')->defaultNull()->end()
            ->end()
            ->children()
                ->scalarNode('title_prefix')->defaultNull()->end()
            ->end()
            ->children()
                ->variableNode('metas')->end()
            ->end()
            ->children()
                ->variableNode('metas_http_equiv')->end()
            ->end()
        ;
        return $treeBuilder;
    }
}
