<?php

namespace EV\HighchartsBundle\DependencyInjection;

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
        $rootNode = $treeBuilder->root('ev_highcharts');

        $rootNode
            ->children()
                ->arrayNode('themes')
                    ->prototype('scalar')->end()
                ->end()
            ->end()
            ->addDefaultsIfNotSet()
            ->children()
                ->arrayNode('themes_defaults')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('default')
                        ->defaultValue('@EVHighchartsBundle/Resources/public/js/Themes/default.json')
                        ->end()
                    ->end()
                ->end()
            ->end();
        
        
        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }

}
