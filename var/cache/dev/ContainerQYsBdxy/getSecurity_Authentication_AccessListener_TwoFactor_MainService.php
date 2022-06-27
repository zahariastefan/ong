<?php

namespace ContainerQYsBdxy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_AccessListener_TwoFactor_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.access_listener.two_factor.main' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\Http\Firewall\TwoFactorAccessListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'FirewallListenerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'TwoFactorAccessListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'TwoFactorAccessDecider.php';

        return $container->privates['security.authentication.access_listener.two_factor.main'] = new \Scheb\TwoFactorBundle\Security\Http\Firewall\TwoFactorAccessListener(($container->privates['security.firewall_config.two_factor.main'] ?? $container->getSecurity_FirewallConfig_TwoFactor_MainService()), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), new \Scheb\TwoFactorBundle\Security\Authorization\TwoFactorAccessDecider(($container->privates['security.access_map'] ?? $container->load('getSecurity_AccessMapService')), ($container->privates['debug.security.access.decision_manager'] ?? $container->getDebug_Security_Access_DecisionManagerService()), ($container->privates['security.http_utils'] ?? $container->getSecurity_HttpUtilsService()), ($container->privates['security.logout_url_generator'] ?? $container->getSecurity_LogoutUrlGeneratorService())));
    }
}
