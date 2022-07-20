<?php

namespace ContainerNumIFV0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LqAhyfdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LqAhyfd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LqAhyfd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'verifyEmailHelper' => ['privates', 'symfonycasts.verify_email.helper', 'getSymfonycasts_VerifyEmail_HelperService', true],
        ], [
            'entityManager' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
            'verifyEmailHelper' => '?',
        ]);
    }
}
