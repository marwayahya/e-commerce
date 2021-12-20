<?php

namespace ContainerNTnhWJ4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QlWlc1zService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qlWlc1z' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qlWlc1z'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ClientController::delete' => ['privates', '.service_locator.a2UKxPj', 'get_ServiceLocator_A2UKxPjService', true],
            'App\\Controller\\ClientController::edit' => ['privates', '.service_locator.a2UKxPj', 'get_ServiceLocator_A2UKxPjService', true],
            'App\\Controller\\ClientController::index' => ['privates', '.service_locator.CZ1jTUx', 'get_ServiceLocator_CZ1jTUxService', true],
            'App\\Controller\\ClientController::new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\ClientController::show' => ['privates', '.service_locator.q48KU4Q', 'get_ServiceLocator_Q48KU4QService', true],
            'App\\Controller\\ProduitController::delete' => ['privates', '.service_locator.MKSKpEZ', 'get_ServiceLocator_MKSKpEZService', true],
            'App\\Controller\\ProduitController::edit' => ['privates', '.service_locator.MKSKpEZ', 'get_ServiceLocator_MKSKpEZService', true],
            'App\\Controller\\ProduitController::index' => ['privates', '.service_locator.JM5nZSk', 'get_ServiceLocator_JM5nZSkService', true],
            'App\\Controller\\ProduitController::new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\ProduitController::show' => ['privates', '.service_locator.ZJzZ1Z2', 'get_ServiceLocator_ZJzZ1Z2Service', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.1g4809_', 'get_ServiceLocator_1g4809Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.LruWq6u', 'get_ServiceLocator_LruWq6uService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.LruWq6u', 'get_ServiceLocator_LruWq6uService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\ClientController:delete' => ['privates', '.service_locator.a2UKxPj', 'get_ServiceLocator_A2UKxPjService', true],
            'App\\Controller\\ClientController:edit' => ['privates', '.service_locator.a2UKxPj', 'get_ServiceLocator_A2UKxPjService', true],
            'App\\Controller\\ClientController:index' => ['privates', '.service_locator.CZ1jTUx', 'get_ServiceLocator_CZ1jTUxService', true],
            'App\\Controller\\ClientController:new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\ClientController:show' => ['privates', '.service_locator.q48KU4Q', 'get_ServiceLocator_Q48KU4QService', true],
            'App\\Controller\\ProduitController:delete' => ['privates', '.service_locator.MKSKpEZ', 'get_ServiceLocator_MKSKpEZService', true],
            'App\\Controller\\ProduitController:edit' => ['privates', '.service_locator.MKSKpEZ', 'get_ServiceLocator_MKSKpEZService', true],
            'App\\Controller\\ProduitController:index' => ['privates', '.service_locator.JM5nZSk', 'get_ServiceLocator_JM5nZSkService', true],
            'App\\Controller\\ProduitController:new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\ProduitController:show' => ['privates', '.service_locator.ZJzZ1Z2', 'get_ServiceLocator_ZJzZ1Z2Service', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.1g4809_', 'get_ServiceLocator_1g4809Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.LruWq6u', 'get_ServiceLocator_LruWq6uService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.LruWq6u', 'get_ServiceLocator_LruWq6uService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\ClientController::delete' => '?',
            'App\\Controller\\ClientController::edit' => '?',
            'App\\Controller\\ClientController::index' => '?',
            'App\\Controller\\ClientController::new' => '?',
            'App\\Controller\\ClientController::show' => '?',
            'App\\Controller\\ProduitController::delete' => '?',
            'App\\Controller\\ProduitController::edit' => '?',
            'App\\Controller\\ProduitController::index' => '?',
            'App\\Controller\\ProduitController::new' => '?',
            'App\\Controller\\ProduitController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
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
            'App\\Controller\\ClientController:delete' => '?',
            'App\\Controller\\ClientController:edit' => '?',
            'App\\Controller\\ClientController:index' => '?',
            'App\\Controller\\ClientController:new' => '?',
            'App\\Controller\\ClientController:show' => '?',
            'App\\Controller\\ProduitController:delete' => '?',
            'App\\Controller\\ProduitController:edit' => '?',
            'App\\Controller\\ProduitController:index' => '?',
            'App\\Controller\\ProduitController:new' => '?',
            'App\\Controller\\ProduitController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
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