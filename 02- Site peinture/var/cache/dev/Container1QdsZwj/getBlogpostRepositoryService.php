<?php

namespace Container1QdsZwj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBlogpostRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\BlogpostRepository' shared autowired service.
     *
     * @return \App\Repository\BlogpostRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'BlogpostRepository.php';

        return $container->privates['App\\Repository\\BlogpostRepository'] = new \App\Repository\BlogpostRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
