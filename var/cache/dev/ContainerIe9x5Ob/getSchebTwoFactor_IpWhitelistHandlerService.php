<?php

namespace ContainerIe9x5Ob;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_IpWhitelistHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'scheb_two_factor.ip_whitelist_handler' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\IpWhitelistHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        if ($lazyLoad) {
            return $container->privates['scheb_two_factor.ip_whitelist_handler'] = $container->createProxy('IpWhitelistHandler_06fe2b0', function () use ($container) {
                return \IpWhitelistHandler_06fe2b0::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = self::do($container, false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'AuthenticationHandlerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'IpWhitelistHandler.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'IpWhitelist'.\DIRECTORY_SEPARATOR.'IpWhitelistProviderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'IpWhitelist'.\DIRECTORY_SEPARATOR.'DefaultIpWhitelistProvider.php';

        return new \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\IpWhitelistHandler(($container->privates['scheb_two_factor.provider_handler'] ?? $container->load('getSchebTwoFactor_ProviderHandlerService')), new \Scheb\TwoFactorBundle\Security\TwoFactor\IpWhitelist\DefaultIpWhitelistProvider([]));
    }
}
