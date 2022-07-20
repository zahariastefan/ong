<?php

namespace ContainerFIeJFdc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwoFactorFormRendererInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Scheb\TwoFactorBundle\Security\TwoFactor\Provider\TwoFactorFormRendererInterface' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        if ($lazyLoad) {
            return $container->services['Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\TwoFactorFormRendererInterface'] = $container->createProxy('DefaultTwoFactorFormRenderer_892ae3f', function () use ($container) {
                return \DefaultTwoFactorFormRenderer_892ae3f::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = self::do($container, false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'TwoFactorFormRendererInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'DefaultTwoFactorFormRenderer.php';

        return new \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer(($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), '@SchebTwoFactor/Authentication/form.html.twig');
    }
}
