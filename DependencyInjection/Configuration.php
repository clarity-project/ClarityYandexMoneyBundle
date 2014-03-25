<?php

namespace Clarity\YandexMoneyBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Zmicier Aliakseyeu <z.aliakseyeu@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('yandex_money');

        $rootNode
            ->children()
                ->scalarNode('client_id')->isRequired()->end()
                ->scalarNode('redirect_uri')->isRequired()->end()
                ->scalarNode('client_secret')->isRequired()->end()
                ->scalarNode('log_path')->defaultValue(false)->end()
                ->arrayNode('scope')
                    ->prototype('scalar')->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}