<?php

/**
 * This file is part of Crowdentials Api Wrapper Bundle.
 *
 * (c) Crowd Valley
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crowdvalley\CrowdentialsApiWrapperBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @inheritdoc
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('crowdvalley_crowdentials_api_wrapper');

        $rootNode
            ->children()
                ->scalarNode('api_key')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('base_url')->isRequired()->cannotBeEmpty()->end()
            ->end();

        return $treeBuilder;
    }
}
