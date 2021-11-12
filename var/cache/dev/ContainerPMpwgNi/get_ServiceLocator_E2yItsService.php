<?php

namespace ContainerPMpwgNi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E2yItsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.E2y_Its' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.E2y_Its'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'questions' => ['privates', '.errored..service_locator.E2y_Its.App\\Entity\\Questions', NULL, 'Cannot autowire service ".service_locator.E2y_Its": it references class "App\\Entity\\Questions" but no such service exists.'],
        ], [
            'questions' => 'App\\Entity\\Questions',
        ]);
    }
}
