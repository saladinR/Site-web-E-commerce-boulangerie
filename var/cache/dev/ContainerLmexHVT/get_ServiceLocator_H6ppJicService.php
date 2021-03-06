<?php

namespace ContainerLmexHVT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H6ppJicService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.H6ppJic' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.H6ppJic'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'addressRepository' => ['privates', 'App\\Repository\\AddressRepository', 'getAddressRepositoryService', true],
        ], [
            'addressRepository' => 'App\\Repository\\AddressRepository',
        ]);
    }
}
