<?php

namespace ContainerOWjetFi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurityVoterService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Security\SecurityVoter' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Security\SecurityVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'Voter'.\DIRECTORY_SEPARATOR.'VoterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'Voter'.\DIRECTORY_SEPARATOR.'Voter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'SecurityVoter.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Security\\SecurityVoter'] = new \EasyCorp\Bundle\EasyAdminBundle\Security\SecurityVoter(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Security\\AuthorizationChecker'] ?? $container->getAuthorizationCheckerService()), ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $container->getAdminContextProviderService()));
    }
}
