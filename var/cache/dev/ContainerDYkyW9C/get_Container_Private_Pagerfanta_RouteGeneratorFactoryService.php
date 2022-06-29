<?php

namespace ContainerDYkyW9C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Pagerfanta_RouteGeneratorFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public '.container.private.pagerfanta.route_generator_factory' shared service.
     *
     * @return \BabDev\PagerfantaBundle\RouteGenerator\RequestAwareRouteGeneratorFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pagerfanta'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'RouteGenerator'.\DIRECTORY_SEPARATOR.'RouteGeneratorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'babdev'.\DIRECTORY_SEPARATOR.'pagerfanta-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'RouteGenerator'.\DIRECTORY_SEPARATOR.'RequestAwareRouteGeneratorFactory.php';

        return $container->services['.container.private.pagerfanta.route_generator_factory'] = new \BabDev\PagerfantaBundle\RouteGenerator\RequestAwareRouteGeneratorFactory(($container->services['router'] ?? $container->getRouterService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')));
    }
}
