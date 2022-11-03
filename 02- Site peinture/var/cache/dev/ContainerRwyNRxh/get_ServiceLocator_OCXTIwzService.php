<?php

namespace ContainerRwyNRxh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OCXTIwzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OCXTIwz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OCXTIwz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'blogpostRepository' => ['privates', 'App\\Repository\\BlogpostRepository', 'getBlogpostRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'blogpostRepository' => 'App\\Repository\\BlogpostRepository',
            'paginator' => '?',
        ]);
    }
}
