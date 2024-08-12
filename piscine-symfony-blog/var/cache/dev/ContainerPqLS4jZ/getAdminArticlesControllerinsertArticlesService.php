<?php

namespace ContainerPqLS4jZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminArticlesControllerinsertArticlesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PFXmw2u.App\Controller\Admin\AdminArticlesController::insertArticles()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PFXmw2u.App\\Controller\\Admin\\AdminArticlesController::insertArticles()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
            'params' => ['privates', 'parameter_bag', 'getParameterBagService', false],
        ], [
            'entityManager' => '?',
            'slugger' => '?',
            'params' => '?',
        ]))->withContext('App\\Controller\\Admin\\AdminArticlesController::insertArticles()', $container);
    }
}