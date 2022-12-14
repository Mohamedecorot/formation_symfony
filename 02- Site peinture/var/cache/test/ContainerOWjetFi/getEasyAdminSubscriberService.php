<?php

namespace ContainerOWjetFi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEasyAdminSubscriberService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\EasyAdminSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\EasyAdminSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventSubscriber'.\DIRECTORY_SEPARATOR.'EasyAdminSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'string'.\DIRECTORY_SEPARATOR.'Slugger'.\DIRECTORY_SEPARATOR.'SluggerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'string'.\DIRECTORY_SEPARATOR.'Slugger'.\DIRECTORY_SEPARATOR.'AsciiSlugger.php';

        return $container->privates['App\\EventSubscriber\\EasyAdminSubscriber'] = new \App\EventSubscriber\EasyAdminSubscriber(($container->privates['slugger'] ?? ($container->privates['slugger'] = new \Symfony\Component\String\Slugger\AsciiSlugger('en'))), ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')));
    }
}
