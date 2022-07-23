<?php

namespace ContainerNRAmVmM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HHjIy4qService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HHjIy4q' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HHjIy4q'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'citiesRepository' => ['privates', 'App\\Repository\\CitiesRepository', 'getCitiesRepositoryService', true],
        ], [
            'citiesRepository' => 'App\\Repository\\CitiesRepository',
        ]);
    }
}