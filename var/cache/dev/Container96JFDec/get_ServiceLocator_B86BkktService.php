<?php

namespace Container96JFDec;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B86BkktService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.b86Bkkt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.b86Bkkt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'answerRepository' => ['privates', 'App\\Repository\\AnswerRepository', 'getAnswerRepositoryService', true],
        ], [
            'answerRepository' => 'App\\Repository\\AnswerRepository',
        ]);
    }
}
