<?php

namespace ContainerON5F1ZP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_FormControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'scheb_two_factor.form_controller' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Controller\FormController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'FormController.php';

        return $container->services['scheb_two_factor.form_controller'] = new \Scheb\TwoFactorBundle\Controller\FormController(($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['scheb_two_factor.provider_registry'] ?? $container->getSchebTwoFactor_ProviderRegistryService()), ($container->services['scheb_two_factor.firewall_context'] ?? $container->load('getSchebTwoFactor_FirewallContextService')), ($container->privates['security.logout_url_generator'] ?? $container->getSecurity_LogoutUrlGeneratorService()), NULL, false);
    }
}
