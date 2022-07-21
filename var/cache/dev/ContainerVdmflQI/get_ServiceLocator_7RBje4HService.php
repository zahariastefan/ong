<?php

namespace ContainerVdmflQI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7RBje4HService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7RBje4H' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7RBje4H'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'repository' => ['privates', 'App\\Repository\\QuestionRepository', 'getQuestionRepositoryService', true],
        ], [
            'entityManager' => '?',
            'repository' => 'App\\Repository\\QuestionRepository',
        ]);
    }
}
