<?php

namespace ContainerNumIFV0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_67B0LfNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.67B0LfN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.67B0LfN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::dashboard' => ['privates', '.service_locator.Wxf6IJb', 'get_ServiceLocator_Wxf6IJbService', true],
            'App\\Controller\\AnswerController::answerVote' => ['privates', '.service_locator.HpwlquH', 'get_ServiceLocator_HpwlquHService', true],
            'App\\Controller\\AnswerController::popularAnswers' => ['privates', '.service_locator.kpfRfZG', 'get_ServiceLocator_KpfRfZGService', true],
            'App\\Controller\\CommentController::commentVote' => ['privates', '.service_locator.OC2AG.K', 'get_ServiceLocator_OC2AG_KService', true],
            'App\\Controller\\Homepage::donations' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Homepage::payment' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Homepage::success' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\PostCreatorController::postCreate' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\QuestionController::edit' => ['privates', '.service_locator.t_C_3cc', 'get_ServiceLocator_TC3ccService', true],
            'App\\Controller\\QuestionController::homepage' => ['privates', '.service_locator.Q_xsdXo', 'get_ServiceLocator_QXsdXoService', true],
            'App\\Controller\\QuestionController::questionVote' => ['privates', '.service_locator.L1ESABr', 'get_ServiceLocator_L1ESABrService', true],
            'App\\Controller\\QuestionController::show' => ['privates', '.service_locator.Fb94rcQ', 'get_ServiceLocator_Fb94rcQService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.imEfKVM', 'get_ServiceLocator_ImEfKVMService', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.LqAhyfd', 'get_ServiceLocator_LqAhyfdService', true],
            'App\\Controller\\SecurityController::disable2fa' => ['privates', '.service_locator.pKcF_sp', 'get_ServiceLocator_PKcFSpService', true],
            'App\\Controller\\SecurityController::displayGoogleAuthenticatorQrCode' => ['privates', '.service_locator.UBfdanz', 'get_ServiceLocator_UBfdanzService', true],
            'App\\Controller\\SecurityController::enable2fa' => ['privates', '.service_locator.pKcF_sp', 'get_ServiceLocator_PKcFSpService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController::logout' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\UserController::profile' => ['privates', '.service_locator._nU1_Up', 'get_ServiceLocator_NU1UpService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AdminController:dashboard' => ['privates', '.service_locator.Wxf6IJb', 'get_ServiceLocator_Wxf6IJbService', true],
            'App\\Controller\\AnswerController:answerVote' => ['privates', '.service_locator.HpwlquH', 'get_ServiceLocator_HpwlquHService', true],
            'App\\Controller\\AnswerController:popularAnswers' => ['privates', '.service_locator.kpfRfZG', 'get_ServiceLocator_KpfRfZGService', true],
            'App\\Controller\\CommentController:commentVote' => ['privates', '.service_locator.OC2AG.K', 'get_ServiceLocator_OC2AG_KService', true],
            'App\\Controller\\Homepage:donations' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Homepage:payment' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Homepage:success' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\PostCreatorController:postCreate' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\QuestionController:edit' => ['privates', '.service_locator.t_C_3cc', 'get_ServiceLocator_TC3ccService', true],
            'App\\Controller\\QuestionController:homepage' => ['privates', '.service_locator.Q_xsdXo', 'get_ServiceLocator_QXsdXoService', true],
            'App\\Controller\\QuestionController:questionVote' => ['privates', '.service_locator.L1ESABr', 'get_ServiceLocator_L1ESABrService', true],
            'App\\Controller\\QuestionController:show' => ['privates', '.service_locator.Fb94rcQ', 'get_ServiceLocator_Fb94rcQService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.imEfKVM', 'get_ServiceLocator_ImEfKVMService', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.LqAhyfd', 'get_ServiceLocator_LqAhyfdService', true],
            'App\\Controller\\SecurityController:disable2fa' => ['privates', '.service_locator.pKcF_sp', 'get_ServiceLocator_PKcFSpService', true],
            'App\\Controller\\SecurityController:displayGoogleAuthenticatorQrCode' => ['privates', '.service_locator.UBfdanz', 'get_ServiceLocator_UBfdanzService', true],
            'App\\Controller\\SecurityController:enable2fa' => ['privates', '.service_locator.pKcF_sp', 'get_ServiceLocator_PKcFSpService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController:logout' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\UserController:profile' => ['privates', '.service_locator._nU1_Up', 'get_ServiceLocator_NU1UpService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AdminController::dashboard' => '?',
            'App\\Controller\\AnswerController::answerVote' => '?',
            'App\\Controller\\AnswerController::popularAnswers' => '?',
            'App\\Controller\\CommentController::commentVote' => '?',
            'App\\Controller\\Homepage::donations' => '?',
            'App\\Controller\\Homepage::payment' => '?',
            'App\\Controller\\Homepage::success' => '?',
            'App\\Controller\\PostCreatorController::postCreate' => '?',
            'App\\Controller\\QuestionController::edit' => '?',
            'App\\Controller\\QuestionController::homepage' => '?',
            'App\\Controller\\QuestionController::questionVote' => '?',
            'App\\Controller\\QuestionController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\SecurityController::disable2fa' => '?',
            'App\\Controller\\SecurityController::displayGoogleAuthenticatorQrCode' => '?',
            'App\\Controller\\SecurityController::enable2fa' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::logout' => '?',
            'App\\Controller\\UserController::profile' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminController:dashboard' => '?',
            'App\\Controller\\AnswerController:answerVote' => '?',
            'App\\Controller\\AnswerController:popularAnswers' => '?',
            'App\\Controller\\CommentController:commentVote' => '?',
            'App\\Controller\\Homepage:donations' => '?',
            'App\\Controller\\Homepage:payment' => '?',
            'App\\Controller\\Homepage:success' => '?',
            'App\\Controller\\PostCreatorController:postCreate' => '?',
            'App\\Controller\\QuestionController:edit' => '?',
            'App\\Controller\\QuestionController:homepage' => '?',
            'App\\Controller\\QuestionController:questionVote' => '?',
            'App\\Controller\\QuestionController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\SecurityController:disable2fa' => '?',
            'App\\Controller\\SecurityController:displayGoogleAuthenticatorQrCode' => '?',
            'App\\Controller\\SecurityController:enable2fa' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:logout' => '?',
            'App\\Controller\\UserController:profile' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
