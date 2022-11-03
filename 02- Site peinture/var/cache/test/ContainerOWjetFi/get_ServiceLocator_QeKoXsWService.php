<?php

namespace ContainerOWjetFi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QeKoXsWService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.QeKoXsW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QeKoXsW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'peintureRepository' => ['privates', 'App\\Repository\\PeintureRepository', 'getPeintureRepositoryService', true],
        ], [
            'paginator' => '?',
            'peintureRepository' => 'App\\Repository\\PeintureRepository',
        ]);
    }
}
