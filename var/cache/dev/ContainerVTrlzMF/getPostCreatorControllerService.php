<?php

namespace ContainerVTrlzMF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostCreatorControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PostCreatorController' shared autowired service.
     *
     * @return \App\Controller\PostCreatorController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'PostCreatorController.php';

        $container->services['App\\Controller\\PostCreatorController'] = $instance = new \App\Controller\PostCreatorController();

        $instance->setContainer(($container->privates['.service_locator..6XfnfV'] ?? $container->load('get_ServiceLocator__6XfnfVService'))->withContext('App\\Controller\\PostCreatorController', $container));

        return $instance;
    }
}
