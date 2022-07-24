<?php

namespace ContainerPNFSBmx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UDJ7uduService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UDJ7udu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UDJ7udu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::dashboard' => ['privates', '.service_locator.4TftXj6', 'get_ServiceLocator_4TftXj6Service', true],
            'App\\Controller\\AnswerController::answerVote' => ['privates', '.service_locator.C7b1xhh', 'get_ServiceLocator_C7b1xhhService', true],
            'App\\Controller\\AnswerController::popularAnswers' => ['privates', '.service_locator.b86Bkkt', 'get_ServiceLocator_B86BkktService', true],
            'App\\Controller\\CommentController::commentVote' => ['privates', '.service_locator.B2N.LKQ', 'get_ServiceLocator_B2N_LKQService', true],
            'App\\Controller\\Homepage::donations' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Homepage::payment' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Homepage::success' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\PostCreatorController::getTextHTML' => ['privates', '.service_locator.LacGXnw', 'get_ServiceLocator_LacGXnwService', true],
            'App\\Controller\\PostCreatorController::postCreate' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\QuestionController::answerVote' => ['privates', '.service_locator.ZMcmmsp', 'get_ServiceLocator_ZMcmmspService', true],
            'App\\Controller\\QuestionController::edit' => ['privates', '.service_locator.WSbH3C6', 'get_ServiceLocator_WSbH3C6Service', true],
            'App\\Controller\\QuestionController::homepage' => ['privates', '.service_locator.CuBuVro', 'get_ServiceLocator_CuBuVroService', true],
            'App\\Controller\\QuestionController::questionVote' => ['privates', '.service_locator.aAudxZ7', 'get_ServiceLocator_AAudxZ7Service', true],
            'App\\Controller\\QuestionController::show' => ['privates', '.service_locator.OD7A_PT', 'get_ServiceLocator_OD7APTService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.UpUxibw', 'get_ServiceLocator_UpUxibwService', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.m6Gvnlc', 'get_ServiceLocator_M6GvnlcService', true],
            'App\\Controller\\SecurityController::disable2fa' => ['privates', '.service_locator.CA.GxLG', 'get_ServiceLocator_CA_GxLGService', true],
            'App\\Controller\\SecurityController::displayGoogleAuthenticatorQrCode' => ['privates', '.service_locator.ouFrzJA', 'get_ServiceLocator_OuFrzJAService', true],
            'App\\Controller\\SecurityController::enable2fa' => ['privates', '.service_locator.CA.GxLG', 'get_ServiceLocator_CA_GxLGService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\SecurityController::logout' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\TripCreatorController::createTrip' => ['privates', '.service_locator.SxsyjTQ', 'get_ServiceLocator_SxsyjTQService', true],
            'App\\Controller\\TripCreatorController::getActivities' => ['privates', '.service_locator.SxsyjTQ', 'get_ServiceLocator_SxsyjTQService', true],
            'App\\Controller\\TripCreatorController::getLocation' => ['privates', '.service_locator.nutZItx', 'get_ServiceLocator_NutZItxService', true],
            'App\\Controller\\UserController::profile' => ['privates', '.service_locator.E4yxQnW', 'get_ServiceLocator_E4yxQnWService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\AdminController:dashboard' => ['privates', '.service_locator.4TftXj6', 'get_ServiceLocator_4TftXj6Service', true],
            'App\\Controller\\AnswerController:answerVote' => ['privates', '.service_locator.C7b1xhh', 'get_ServiceLocator_C7b1xhhService', true],
            'App\\Controller\\AnswerController:popularAnswers' => ['privates', '.service_locator.b86Bkkt', 'get_ServiceLocator_B86BkktService', true],
            'App\\Controller\\CommentController:commentVote' => ['privates', '.service_locator.B2N.LKQ', 'get_ServiceLocator_B2N_LKQService', true],
            'App\\Controller\\Homepage:donations' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Homepage:payment' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Homepage:success' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\PostCreatorController:getTextHTML' => ['privates', '.service_locator.LacGXnw', 'get_ServiceLocator_LacGXnwService', true],
            'App\\Controller\\PostCreatorController:postCreate' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\QuestionController:answerVote' => ['privates', '.service_locator.ZMcmmsp', 'get_ServiceLocator_ZMcmmspService', true],
            'App\\Controller\\QuestionController:edit' => ['privates', '.service_locator.WSbH3C6', 'get_ServiceLocator_WSbH3C6Service', true],
            'App\\Controller\\QuestionController:homepage' => ['privates', '.service_locator.CuBuVro', 'get_ServiceLocator_CuBuVroService', true],
            'App\\Controller\\QuestionController:questionVote' => ['privates', '.service_locator.aAudxZ7', 'get_ServiceLocator_AAudxZ7Service', true],
            'App\\Controller\\QuestionController:show' => ['privates', '.service_locator.OD7A_PT', 'get_ServiceLocator_OD7APTService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.UpUxibw', 'get_ServiceLocator_UpUxibwService', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.m6Gvnlc', 'get_ServiceLocator_M6GvnlcService', true],
            'App\\Controller\\SecurityController:disable2fa' => ['privates', '.service_locator.CA.GxLG', 'get_ServiceLocator_CA_GxLGService', true],
            'App\\Controller\\SecurityController:displayGoogleAuthenticatorQrCode' => ['privates', '.service_locator.ouFrzJA', 'get_ServiceLocator_OuFrzJAService', true],
            'App\\Controller\\SecurityController:enable2fa' => ['privates', '.service_locator.CA.GxLG', 'get_ServiceLocator_CA_GxLGService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\SecurityController:logout' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\TripCreatorController:createTrip' => ['privates', '.service_locator.SxsyjTQ', 'get_ServiceLocator_SxsyjTQService', true],
            'App\\Controller\\TripCreatorController:getActivities' => ['privates', '.service_locator.SxsyjTQ', 'get_ServiceLocator_SxsyjTQService', true],
            'App\\Controller\\TripCreatorController:getLocation' => ['privates', '.service_locator.nutZItx', 'get_ServiceLocator_NutZItxService', true],
            'App\\Controller\\UserController:profile' => ['privates', '.service_locator.E4yxQnW', 'get_ServiceLocator_E4yxQnWService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\AdminController::dashboard' => '?',
            'App\\Controller\\AnswerController::answerVote' => '?',
            'App\\Controller\\AnswerController::popularAnswers' => '?',
            'App\\Controller\\CommentController::commentVote' => '?',
            'App\\Controller\\Homepage::donations' => '?',
            'App\\Controller\\Homepage::payment' => '?',
            'App\\Controller\\Homepage::success' => '?',
            'App\\Controller\\PostCreatorController::getTextHTML' => '?',
            'App\\Controller\\PostCreatorController::postCreate' => '?',
            'App\\Controller\\QuestionController::answerVote' => '?',
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
            'App\\Controller\\TripCreatorController::createTrip' => '?',
            'App\\Controller\\TripCreatorController::getActivities' => '?',
            'App\\Controller\\TripCreatorController::getLocation' => '?',
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
            'App\\Controller\\PostCreatorController:getTextHTML' => '?',
            'App\\Controller\\PostCreatorController:postCreate' => '?',
            'App\\Controller\\QuestionController:answerVote' => '?',
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
            'App\\Controller\\TripCreatorController:createTrip' => '?',
            'App\\Controller\\TripCreatorController:getActivities' => '?',
            'App\\Controller\\TripCreatorController:getLocation' => '?',
            'App\\Controller\\UserController:profile' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
