<?php

namespace ContainerIe9x5Ob;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_AutoCommand_MakeFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.auto_command.make_factory' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'zenstruck'.\DIRECTORY_SEPARATOR.'foundry'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeFactory.php';

        $container->privates['maker.auto_command.make_factory'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Zenstruck\Foundry\Bundle\Maker\MakeFactory(($container->privates['Zenstruck\\Foundry\\ChainManagerRegistry'] ?? $container->load('getChainManagerRegistryService')), new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\Factory\\AnswerFactory'] ?? ($container->privates['App\\Factory\\AnswerFactory'] = new \App\Factory\AnswerFactory()));
            yield 1 => ($container->privates['App\\Factory\\CauzeFactory'] ?? ($container->privates['App\\Factory\\CauzeFactory'] = new \App\Factory\CauzeFactory()));
            yield 2 => ($container->privates['App\\Factory\\ProductsFactory'] ?? ($container->privates['App\\Factory\\ProductsFactory'] = new \App\Factory\ProductsFactory()));
            yield 3 => ($container->privates['App\\Factory\\QuestionFactory'] ?? ($container->privates['App\\Factory\\QuestionFactory'] = new \App\Factory\QuestionFactory()));
            yield 4 => ($container->privates['App\\Factory\\QuestionTagFactory'] ?? ($container->privates['App\\Factory\\QuestionTagFactory'] = new \App\Factory\QuestionTagFactory()));
            yield 5 => ($container->privates['App\\Factory\\TagFactory'] ?? ($container->privates['App\\Factory\\TagFactory'] = new \App\Factory\TagFactory()));
            yield 6 => ($container->privates['App\\Factory\\UniqueCodesFactory'] ?? ($container->privates['App\\Factory\\UniqueCodesFactory'] = new \App\Factory\UniqueCodesFactory()));
            yield 7 => ($container->privates['App\\Factory\\UserFactory'] ?? $container->load('getUserFactoryService'));
        }, 8)), ($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService')), ($container->privates['maker.generator'] ?? $container->load('getMaker_GeneratorService')));

        $instance->setName('make:factory');
        $instance->setDescription('Creates a Foundry model factory for a Doctrine entity class');

        return $instance;
    }
}
