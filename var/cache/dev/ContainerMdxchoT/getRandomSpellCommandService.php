<?php

namespace ContainerMdxchoT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRandomSpellCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\RandomSpellCommand' shared autowired service.
     *
     * @return \App\Command\RandomSpellCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'RandomSpellCommand.php';

        $container->privates['App\\Command\\RandomSpellCommand'] = $instance = new \App\Command\RandomSpellCommand(($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        $instance->setName('app:random-spell');

        return $instance;
    }
}
