<?php

namespace noetix\TractionBundle\DependencyInjection;

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
        $rootNode = $treeBuilder->root('noetix_traction');

        $rootNode
            ->children()
                ->scalarNode('host')
                    ->defaultValue('https://int.api.tractionplatform.com')
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('user_id')
                    ->isRequired()
                ->end()
                ->scalarNode('password')
                    ->isRequired()
                ->end()
                ->scalarNode('endpoint_id')
                    ->isRequired()
                ->end()
                ->booleanNode('test')
                    ->defaultFalse()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}