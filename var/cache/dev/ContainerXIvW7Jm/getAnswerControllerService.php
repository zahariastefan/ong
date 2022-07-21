<?php

namespace ContainerXIvW7Jm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnswerControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AnswerController' shared autowired service.
     *
     * @return \App\Controller\AnswerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'BaseController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AnswerController.php';

        $container->services['App\\Controller\\AnswerController'] = $instance = new \App\Controller\AnswerController();

        $instance->setContainer(($container->privates['.service_locator.YGRC_XS'] ?? $container->load('get_ServiceLocator_YGRCXSService'))->withContext('App\\Controller\\AnswerController', $container));

        return $instance;
    }
}
