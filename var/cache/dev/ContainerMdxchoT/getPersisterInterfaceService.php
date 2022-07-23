<?php

namespace ContainerMdxchoT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPersisterInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Scheb\TwoFactorBundle\Model\PersisterInterface' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister
     */
    public static function do($container, $lazyLoad = true)
    {
        if ($lazyLoad) {
            return $container->services['Scheb\\TwoFactorBundle\\Model\\PersisterInterface'] = $container->createProxy('DoctrinePersister_a694024', function () use ($container) {
                return \DoctrinePersister_a694024::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = self::do($container, false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'PersisterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'Persister'.\DIRECTORY_SEPARATOR.'DoctrinePersister.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Model'.\DIRECTORY_SEPARATOR.'Persister'.\DIRECTORY_SEPARATOR.'DoctrinePersisterFactory.php';

        return (new \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersisterFactory(($container->services['doctrine'] ?? $container->getDoctrineService()), NULL))->getPersister();
    }
}
