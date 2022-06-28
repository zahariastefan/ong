<?php

namespace ContainerIcqpIXf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UBfdanzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UBfdanz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UBfdanz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'qrCodeGenerator' => ['services', 'scheb_two_factor.qr_code_generator', 'getSchebTwoFactor_QrCodeGeneratorService', true],
        ], [
            'qrCodeGenerator' => '?',
        ]);
    }
}
