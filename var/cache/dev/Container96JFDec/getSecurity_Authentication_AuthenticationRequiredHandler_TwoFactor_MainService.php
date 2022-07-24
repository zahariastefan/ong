<?php

namespace Container96JFDec;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_AuthenticationRequiredHandler_TwoFactor_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.authentication_required_handler.two_factor.main' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\Http\Authentication\DefaultAuthenticationRequiredHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'AuthenticationRequiredHandlerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'Authentication'.\DIRECTORY_SEPARATOR.'DefaultAuthenticationRequiredHandler.php';

        return $container->privates['security.authentication.authentication_required_handler.two_factor.main'] = new \Scheb\TwoFactorBundle\Security\Http\Authentication\DefaultAuthenticationRequiredHandler(($container->privates['security.http_utils'] ?? $container->getSecurity_HttpUtilsService()), ($container->privates['security.firewall_config.two_factor.main'] ?? $container->getSecurity_FirewallConfig_TwoFactor_MainService()), []);
    }
}
