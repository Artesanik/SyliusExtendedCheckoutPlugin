<?php

declare(strict_types=1);

namespace Artesanik\SyliusExtendedCheckoutPlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('artesanik_sylius_extended_checkout_plugin');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
