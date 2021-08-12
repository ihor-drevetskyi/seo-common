<?php

namespace SeoCommonBundle\DependencyInjection;

use Exception;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;

/**
 * Class SeoCommonExtension
 * @package SeoCommonBundle\DependencyInjection
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
final class SeoCommonExtension extends Extension implements PrependExtensionInterface
{
    /**
     * @param ContainerBuilder $container
     * @throws Exception
     */
    public function prepend(ContainerBuilder $container)
    {
        $bundles = $container->getParameter('kernel.bundles');
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config/packages'));

        if (isset($bundles['DoctrineBundle'])) {
            $loader->load('doctrine.yaml');
        }

        if (isset($bundles['VichUploaderBundle'])) {
            $loader->load('vich_uploader.yaml');
        }
    }

    /**
     * @param array $configs
     * @param ContainerBuilder $container
     * @throws Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yaml');
    }
}
