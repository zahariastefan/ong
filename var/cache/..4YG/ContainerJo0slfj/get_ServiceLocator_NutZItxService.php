<?php

namespace ContainerJo0slfj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NutZItxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nutZItx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nutZItx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'repository' => ['privates', 'App\\Repository\\CitiesRepository', 'getCitiesRepositoryService', true],
        ], [
            'entityManager' => '?',
            'repository' => 'App\\Repository\\CitiesRepository',
        ]);
    }
}