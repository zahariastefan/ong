<?php

namespace ContainerNumIFV0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HpwlquHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HpwlquH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HpwlquH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'answer' => ['privates', '.errored..service_locator.HpwlquH.App\\Entity\\Answer', NULL, 'Cannot autowire service ".service_locator.HpwlquH": it references class "App\\Entity\\Answer" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'logger' => ['privates', 'logger', 'getLoggerService', false],
        ], [
            'answer' => 'App\\Entity\\Answer',
            'entityManager' => '?',
            'logger' => '?',
        ]);
    }
}
