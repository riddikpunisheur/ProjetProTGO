<?php

namespace ContainerXpqlVez;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessageControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\MessageController' shared autowired service.
     *
     * @return \App\Controller\MessageController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/MessageController.php';

        $container->services['App\\Controller\\MessageController'] = $instance = new \App\Controller\MessageController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\MessageController', $container));

        return $instance;
    }
}
