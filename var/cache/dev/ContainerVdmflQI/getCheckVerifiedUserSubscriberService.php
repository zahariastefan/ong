<?php

namespace ContainerVdmflQI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCheckVerifiedUserSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\CheckVerifiedUserSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\CheckVerifiedUserSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventSubscriber'.\DIRECTORY_SEPARATOR.'CheckVerifiedUserSubscriber.php';

        return $container->privates['App\\EventSubscriber\\CheckVerifiedUserSubscriber'] = new \App\EventSubscriber\CheckVerifiedUserSubscriber(($container->services['router'] ?? $container->getRouterService()));
    }
}
