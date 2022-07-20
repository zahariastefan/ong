<?php

namespace ContainerFIeJFdc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PKcFSpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pKcF_sp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pKcF_sp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'totpAuthenticator' => ['services', 'scheb_two_factor.security.totp_authenticator', 'getSchebTwoFactor_Security_TotpAuthenticatorService', true],
        ], [
            'entityManager' => '?',
            'totpAuthenticator' => '?',
        ]);
    }
}
