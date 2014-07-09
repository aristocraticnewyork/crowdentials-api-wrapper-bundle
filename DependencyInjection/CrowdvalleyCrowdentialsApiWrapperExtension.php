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

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
class CrowdvalleyCrowdentialsApiWrapperExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $container->setAlias('crowdentials_api', 'crowdvalley_crowdentials_api_wrapper.api_accreditation_wrapper');
        $container->setParameter('crowdvalley_crowdentials_api_wrapper.api_key', $config['api_key']);
        $container->setParameter('crowdvalley_crowdentials_api_wrapper.base_url', $config['base_url']);
    }
}
