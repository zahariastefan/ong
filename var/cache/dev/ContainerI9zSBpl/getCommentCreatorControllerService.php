<?php

namespace ContainerI9zSBpl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentCreatorControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CommentCreatorController' shared autowired service.
     *
     * @return \App\Controller\CommentCreatorController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CommentCreatorController.php';

        $container->services['App\\Controller\\CommentCreatorController'] = $instance = new \App\Controller\CommentCreatorController();

        $instance->setContainer(($container->privates['.service_locator.YGRC_XS'] ?? $container->load('get_ServiceLocator_YGRCXSService'))->withContext('App\\Controller\\CommentCreatorController', $container));

        return $instance;
    }
}
