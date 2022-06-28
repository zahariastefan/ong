<?php

namespace ContainerON5F1ZP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigurationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Zenstruck\Foundry\Configuration' shared service.
     *
     * @return \Zenstruck\Foundry\Configuration
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'zenstruck'.\DIRECTORY_SEPARATOR.'foundry'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Configuration.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'zenstruck'.\DIRECTORY_SEPARATOR.'foundry'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'StoryManager.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'zenstruck'.\DIRECTORY_SEPARATOR.'foundry'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ModelFactoryManager.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'zenstruck'.\DIRECTORY_SEPARATOR.'foundry'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Instantiator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'fakerphp'.\DIRECTORY_SEPARATOR.'faker'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Faker'.\DIRECTORY_SEPARATOR.'Generator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'fakerphp'.\DIRECTORY_SEPARATOR.'faker'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Faker'.\DIRECTORY_SEPARATOR.'Factory.php';

        $container->services['Zenstruck\\Foundry\\Configuration'] = $instance = new \Zenstruck\Foundry\Configuration();

        $instance->setManagerRegistry(($container->privates['Zenstruck\\Foundry\\ChainManagerRegistry'] ?? $container->load('getChainManagerRegistryService')));
        $instance->setStoryManager(new \Zenstruck\Foundry\StoryManager(new RewindableGenerator(function () use ($container) {
            return new \EmptyIterator();
        }, 0)));
        $instance->setModelFactoryManager(new \Zenstruck\Foundry\ModelFactoryManager(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\Factory\\AnswerFactory'] ?? ($container->privates['App\\Factory\\AnswerFactory'] = new \App\Factory\AnswerFactory()));
            yield 1 => ($container->privates['App\\Factory\\CauzeFactory'] ?? ($container->privates['App\\Factory\\CauzeFactory'] = new \App\Factory\CauzeFactory()));
            yield 2 => ($container->privates['App\\Factory\\ProductsFactory'] ?? ($container->privates['App\\Factory\\ProductsFactory'] = new \App\Factory\ProductsFactory()));
            yield 3 => ($container->privates['App\\Factory\\QuestionFactory'] ?? ($container->privates['App\\Factory\\QuestionFactory'] = new \App\Factory\QuestionFactory()));
            yield 4 => ($container->privates['App\\Factory\\QuestionTagFactory'] ?? ($container->privates['App\\Factory\\QuestionTagFactory'] = new \App\Factory\QuestionTagFactory()));
            yield 5 => ($container->privates['App\\Factory\\TagFactory'] ?? ($container->privates['App\\Factory\\TagFactory'] = new \App\Factory\TagFactory()));
            yield 6 => ($container->privates['App\\Factory\\UniqueCodesFactory'] ?? ($container->privates['App\\Factory\\UniqueCodesFactory'] = new \App\Factory\UniqueCodesFactory()));
            yield 7 => ($container->privates['App\\Factory\\UserFactory'] ?? $container->load('getUserFactoryService'));
        }, 8)));
        $instance->setInstantiator(new \Zenstruck\Foundry\Instantiator());
        $instance->setFaker(\Faker\Factory::create());
        $instance->enableDefaultProxyAutoRefresh();

        return $instance;
    }
}
