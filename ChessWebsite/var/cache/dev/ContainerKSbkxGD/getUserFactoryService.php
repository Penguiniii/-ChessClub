<?php

namespace ContainerKSbkxGD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Factory\UserFactory' shared autowired service.
     *
     * @return \App\Factory\UserFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'zenstruck'.\DIRECTORY_SEPARATOR.'foundry'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Factory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'zenstruck'.\DIRECTORY_SEPARATOR.'foundry'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ModelFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'UserFactory.php';

        return $container->privates['App\\Factory\\UserFactory'] = new \App\Factory\UserFactory(($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')));
    }
}
