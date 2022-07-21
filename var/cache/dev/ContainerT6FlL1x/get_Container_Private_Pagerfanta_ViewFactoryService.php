<?php

namespace ContainerT6FlL1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_Pagerfanta_ViewFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public '.container.private.pagerfanta.view_factory' shared service.
     *
     * @return \Pagerfanta\View\ViewFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pagerfanta'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'View'.\DIRECTORY_SEPARATOR.'ViewFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pagerfanta'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'View'.\DIRECTORY_SEPARATOR.'ViewFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pagerfanta'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'View'.\DIRECTORY_SEPARATOR.'ViewInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pagerfanta'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'View'.\DIRECTORY_SEPARATOR.'View.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pagerfanta'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'View'.\DIRECTORY_SEPARATOR.'TemplateView.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pagerfanta'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'View'.\DIRECTORY_SEPARATOR.'DefaultView.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pagerfanta'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'View'.\DIRECTORY_SEPARATOR.'Foundation6View.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pagerfanta'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'View'.\DIRECTORY_SEPARATOR.'SemanticUiView.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pagerfanta'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'View'.\DIRECTORY_SEPARATOR.'TwitterBootstrapView.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pagerfanta'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'View'.\DIRECTORY_SEPARATOR.'TwitterBootstrap3View.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pagerfanta'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'View'.\DIRECTORY_SEPARATOR.'TwitterBootstrap4View.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pagerfanta'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'View'.\DIRECTORY_SEPARATOR.'TwitterBootstrap5View.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pagerfanta'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'View'.\DIRECTORY_SEPARATOR.'TwigView.php';

        $container->services['.container.private.pagerfanta.view_factory'] = $instance = new \Pagerfanta\View\ViewFactory();

        $instance->set('default', new \Pagerfanta\View\DefaultView());
        $instance->set('foundation6', new \Pagerfanta\View\Foundation6View());
        $instance->set('semantic_ui', new \Pagerfanta\View\SemanticUiView());
        $instance->set('twitter_bootstrap', new \Pagerfanta\View\TwitterBootstrapView());
        $instance->set('twitter_bootstrap3', new \Pagerfanta\View\TwitterBootstrap3View());
        $instance->set('twitter_bootstrap4', new \Pagerfanta\View\TwitterBootstrap4View());
        $instance->set('twitter_bootstrap5', new \Pagerfanta\View\TwitterBootstrap5View());
        $instance->set('twig', new \Pagerfanta\Twig\View\TwigView(($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), '@Pagerfanta/default.html.twig'));

        return $instance;
    }
}
