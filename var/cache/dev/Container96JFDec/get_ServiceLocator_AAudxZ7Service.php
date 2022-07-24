<?php

namespace Container96JFDec;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AAudxZ7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aAudxZ7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aAudxZ7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'question' => ['privates', '.errored..service_locator.aAudxZ7.App\\Entity\\Question', NULL, 'Cannot autowire service ".service_locator.aAudxZ7": it references class "App\\Entity\\Question" but no such service exists.'],
            'questionRepository' => ['privates', 'App\\Repository\\QuestionRepository', 'getQuestionRepositoryService', true],
            'repository' => ['privates', 'App\\Repository\\UserVotesRepository', 'getUserVotesRepositoryService', true],
        ], [
            'entityManager' => '?',
            'question' => 'App\\Entity\\Question',
            'questionRepository' => 'App\\Repository\\QuestionRepository',
            'repository' => 'App\\Repository\\UserVotesRepository',
        ]);
    }
}
