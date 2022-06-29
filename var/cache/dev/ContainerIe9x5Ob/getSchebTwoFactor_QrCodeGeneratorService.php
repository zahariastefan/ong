<?php

namespace ContainerIe9x5Ob;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_QrCodeGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'scheb_two_factor.qr_code_generator' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\QrCode\QrCodeGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-qr-code'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'QrCode'.\DIRECTORY_SEPARATOR.'QrCodeGenerator.php';

        return $container->services['scheb_two_factor.qr_code_generator'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\QrCode\QrCodeGenerator(NULL, ($container->services['scheb_two_factor.security.totp_authenticator'] ?? $container->load('getSchebTwoFactor_Security_TotpAuthenticatorService')));
    }
}
