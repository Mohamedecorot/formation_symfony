<?php

namespace Container1QdsZwj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9s2Dr1IService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9s2Dr1I' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9s2Dr1I'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contactService' => ['privates', 'App\\Service\\ContactService', 'getContactServiceService', true],
        ], [
            'contactService' => 'App\\Service\\ContactService',
        ]);
    }
}
