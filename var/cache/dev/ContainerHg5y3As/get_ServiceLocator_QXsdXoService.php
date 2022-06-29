<?php

namespace ContainerHg5y3As;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QXsdXoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Q_xsdXo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Q_xsdXo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repository' => ['privates', 'App\\Repository\\QuestionRepository', 'getQuestionRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\QuestionRepository',
        ]);
    }
}
