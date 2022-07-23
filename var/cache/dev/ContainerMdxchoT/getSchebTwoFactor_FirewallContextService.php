<?php

namespace ContainerMdxchoT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_FirewallContextService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'scheb_two_factor.firewall_context' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\TwoFactorFirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'TwoFactorFirewallContext.php';

        return $container->services['scheb_two_factor.firewall_context'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\TwoFactorFirewallContext(['main' => ($container->privates['security.firewall_config.two_factor.main'] ?? $container->getSecurity_FirewallConfig_TwoFactor_MainService())]);
    }
}
