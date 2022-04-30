<?php

namespace ContainerK0gUlTR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_27lbZP_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.27lbZP.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.27lbZP.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\MainController::Login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\RegistrationController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.GPGtF8v', 'get_ServiceLocator_GPGtF8vService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.GPGtF8v', 'get_ServiceLocator_GPGtF8vService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\MainController:Login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\RegistrationController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.GPGtF8v', 'get_ServiceLocator_GPGtF8vService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.GPGtF8v', 'get_ServiceLocator_GPGtF8vService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\MainController::Login' => '?',
            'App\\Controller\\RegistrationController::new' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\MainController:Login' => '?',
            'App\\Controller\\RegistrationController:new' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
