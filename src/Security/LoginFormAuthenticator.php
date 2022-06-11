<?php

namespace App\Security;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\CustomCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\PassportInterface;
use Symfony\Component\Security\Http\EntryPoint\AuthenticationEntryPointInterface;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class LoginFormAuthenticator
{
//
//    use TargetPathTrait;
//
//    private UserRepository $userRepository;
//    private RouterInterface $router;
//
//    public function __construct(UserRepository $userRepository, RouterInterface $router)
//    {
//        $this->userRepository = $userRepository;
//        $this->router = $router;
//    }
//
//    public function authenticate(Request $request): PassportInterface
//    {
//        $email = $request->request->get('email');
//        $password = $request->request->get('password');
//
//        return new Passport(
//            new UserBadge($email, function ($userIdentifier){//this identify the user
//                //everything we pass in param of this function ,
//                // in our case $userIdentifier ,
//                // will be exact the same of the previous variable, in our case $email
//                $user = $this->userRepository->findOneBy(['email' => $userIdentifier]);
//
//                if(!$user){
//                    throw new UserNotFoundException();
//                }
//                return $user;
//            }),
//            new PasswordCredentials($password),
//            [
//                new CsrfTokenBadge(
//                    'authenticate',
//                    $request->request->get('_csrf_token')
//                ),
//                // new RememberMeBadge(), //there is no mandatory to specify _remember_me because the RememberMeBadge know to look for an input with that name automatically
//                (new RememberMeBadge())->enable(),//always remember me
//            ]
//        );
//    }
//
//    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
//    {
//        if ($target = $this->getTargetPath($request->getSession(), $firewallName)) {
//            return new RedirectResponse($target);
//        }
//
//        return new RedirectResponse(
//            $this->router->generate('app_homepage')
//        );
//    }
//
//    protected function getLoginUrl(Request $request): string
//    {
//        return $this->router->generate('app_login');
//    }

}