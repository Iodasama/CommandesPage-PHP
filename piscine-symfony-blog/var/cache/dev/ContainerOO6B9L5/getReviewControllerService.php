<?php

namespace ContainerOO6B9L5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReviewControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Guest\ReviewController' shared autowired service.
     *
     * @return \App\Controller\Guest\ReviewController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Guest/ReviewController.php';

        $container->services['App\\Controller\\Guest\\ReviewController'] = $instance = new \App\Controller\Guest\ReviewController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\Guest\\ReviewController', $container));

        return $instance;
    }
}
