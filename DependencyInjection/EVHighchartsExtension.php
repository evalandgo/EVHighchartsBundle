<?php

namespace EV\HighchartsBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class EVHighchartsExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
        
        $themesConfig = array();
        foreach($config['themes'] as $key=>$value){
            foreach($value as $key2=>$value2){
                $themesConfig[$key2] = $value2;
            }
        }

        $container->setParameter('ev_highcharts.themes', array_merge($config['themes_defaults'],$themesConfig));
        $container->setParameter('ev_highcharts.export_url', $config['export_url']);
    }
}
