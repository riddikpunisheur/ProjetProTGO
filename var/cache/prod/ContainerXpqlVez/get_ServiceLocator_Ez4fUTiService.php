<?php

namespace ContainerXpqlVez;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ez4fUTiService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.Ez4fUTi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ez4fUTi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'AbstractLoginFormAuthenticator' => ['privates', '.errored.UKTcX8.', NULL, 'Cannot determine controller argument for "App\\Controller\\RegistrationController::register()": the $AbstractLoginFormAuthenticator argument is type-hinted with the non-existent class or interface: "App\\Security\\LoginFormAuthenticator".'],
            'guardHandler' => ['privates', 'security.authentication.guard_handler', 'getSecurity_Authentication_GuardHandlerService', true],
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
        ], [
            'AbstractLoginFormAuthenticator' => '?',
            'guardHandler' => '?',
            'passwordEncoder' => '?',
        ]);
    }
}
