<?php

namespace ContainerJo0slfj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_Security_TotpFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'scheb_two_factor.security.totp_factory' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\Totp\TotpFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-totp'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'Totp'.\DIRECTORY_SEPARATOR.'TotpFactory.php';

        return $container->services['scheb_two_factor.security.totp_factory'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\Totp\TotpFactory(NULL, 'Couldron Overflow', []);
    }
}
