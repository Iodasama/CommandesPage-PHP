<?php

namespace Container2Fg1SKS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminCategoriesControllerdeleteCategoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uZAU9uc.App\Controller\Admin\AdminCategoriesController::deleteCategory()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uZAU9uc.App\\Controller\\Admin\\AdminCategoriesController::deleteCategory()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\Admin\\AdminCategoriesController::deleteCategory()', $container);
    }
}