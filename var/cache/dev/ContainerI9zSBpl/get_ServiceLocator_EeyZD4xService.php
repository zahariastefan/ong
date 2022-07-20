<?php

namespace ContainerI9zSBpl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EeyZD4xService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EeyZD4x' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EeyZD4x'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'question' => ['privates', '.errored..service_locator.EeyZD4x.App\\Entity\\Question', NULL, 'Cannot autowire service ".service_locator.EeyZD4x": it references class "App\\Entity\\Question" but no such service exists.'],
            'questionRepository' => ['privates', 'App\\Repository\\QuestionRepository', 'getQuestionRepositoryService', true],
            'userVotesAnswersRepository' => ['privates', 'App\\Repository\\UserVotesAnswersRepository', 'getUserVotesAnswersRepositoryService', true],
            'userVotesRepository' => ['privates', 'App\\Repository\\UserVotesRepository', 'getUserVotesRepositoryService', true],
        ], [
            'question' => 'App\\Entity\\Question',
            'questionRepository' => 'App\\Repository\\QuestionRepository',
            'userVotesAnswersRepository' => 'App\\Repository\\UserVotesAnswersRepository',
            'userVotesRepository' => 'App\\Repository\\UserVotesRepository',
        ]);
    }
}
