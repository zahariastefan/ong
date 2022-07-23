<?php

namespace ContainerMdxchoT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ImEfKVMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.imEfKVM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.imEfKVM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'verifyEmailHelper' => ['privates', 'symfonycasts.verify_email.helper', 'getSymfonycasts_VerifyEmail_HelperService', true],
        ], [
            'userPasswordHasher' => '?',
            'verifyEmailHelper' => '?',
        ]);
    }
}
