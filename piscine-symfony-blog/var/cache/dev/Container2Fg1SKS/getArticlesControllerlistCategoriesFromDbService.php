<?php

namespace Container2Fg1SKS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticlesControllerlistCategoriesFromDbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MEncpnc.App\Controller\Guest\ArticlesController::listCategoriesFromDb()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MEncpnc.App\\Controller\\Guest\\ArticlesController::listCategoriesFromDb()'] = ($container->privates['.service_locator.MEncpnc'] ?? $container->load('get_ServiceLocator_MEncpncService'))->withContext('App\\Controller\\Guest\\ArticlesController::listCategoriesFromDb()', $container);
    }
}
