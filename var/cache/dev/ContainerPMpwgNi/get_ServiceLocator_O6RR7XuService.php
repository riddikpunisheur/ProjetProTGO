<?php

namespace ContainerPMpwgNi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O6RR7XuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o6RR7Xu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o6RR7Xu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'questionsRepository' => ['privates', 'App\\Repository\\QuestionsRepository', 'getQuestionsRepositoryService', true],
        ], [
            'questionsRepository' => 'App\\Repository\\QuestionsRepository',
        ]);
    }
}