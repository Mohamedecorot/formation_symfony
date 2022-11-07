<?php

namespace Container1QdsZwj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PNCPr2CService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PNCPr2C' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PNCPr2C'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'blogpost' => ['privates', '.errored..service_locator.PNCPr2C.App\\Entity\\Blogpost', NULL, 'Cannot autowire service ".service_locator.PNCPr2C": it references class "App\\Entity\\Blogpost" but no such service exists.'],
        ], [
            'blogpost' => 'App\\Entity\\Blogpost',
        ]);
    }
}