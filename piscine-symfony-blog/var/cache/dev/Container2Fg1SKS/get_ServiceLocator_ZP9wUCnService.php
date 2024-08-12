<?php

namespace Container2Fg1SKS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZP9wUCnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZP9wUCn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZP9wUCn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\Admin\\AdminArticlesController::adminListArticlesFromDb' => ['privates', '.service_locator.IqSceiR.App\\Controller\\Admin\\AdminArticlesController::adminListArticlesFromDb()', 'getAdminArticlesControlleradminListArticlesFromDbService', true],
            'App\\Controller\\Admin\\AdminArticlesController::deleteArticle' => ['privates', '.service_locator.dVEa85z.App\\Controller\\Admin\\AdminArticlesController::deleteArticle()', 'getAdminArticlesControllerdeleteArticleService', true],
            'App\\Controller\\Admin\\AdminArticlesController::insertArticles' => ['privates', '.service_locator.PFXmw2u.App\\Controller\\Admin\\AdminArticlesController::insertArticles()', 'getAdminArticlesControllerinsertArticlesService', true],
            'App\\Controller\\Admin\\AdminArticlesController::updateArticles' => ['privates', '.service_locator.f0MmMYB.App\\Controller\\Admin\\AdminArticlesController::updateArticles()', 'getAdminArticlesControllerupdateArticlesService', true],
            'App\\Controller\\Admin\\AdminCategoriesController::adminListCategoriesFromDb' => ['privates', '.service_locator.MEncpnc.App\\Controller\\Admin\\AdminCategoriesController::adminListCategoriesFromDb()', 'getAdminCategoriesControlleradminListCategoriesFromDbService', true],
            'App\\Controller\\Admin\\AdminCategoriesController::deleteCategory' => ['privates', '.service_locator.uZAU9uc.App\\Controller\\Admin\\AdminCategoriesController::deleteCategory()', 'getAdminCategoriesControllerdeleteCategoryService', true],
            'App\\Controller\\Admin\\AdminCategoriesController::insertCategories' => ['privates', '.service_locator.P.blNFL.App\\Controller\\Admin\\AdminCategoriesController::insertCategories()', 'getAdminCategoriesControllerinsertCategoriesService', true],
            'App\\Controller\\Admin\\AdminCategoriesController::updateCategories' => ['privates', '.service_locator.AAtH1eF.App\\Controller\\Admin\\AdminCategoriesController::updateCategories()', 'getAdminCategoriesControllerupdateCategoriesService', true],
            'App\\Controller\\Admin\\AdminUserController::insertAdminUser' => ['privates', '.service_locator.r_XOrDH.App\\Controller\\Admin\\AdminUserController::insertAdminUser()', 'getAdminUserControllerinsertAdminUserService', true],
            'App\\Controller\\Guest\\ArticlesController::listArticlesFromDb' => ['privates', '.service_locator.IqSceiR.App\\Controller\\Guest\\ArticlesController::listArticlesFromDb()', 'getArticlesControllerlistArticlesFromDbService', true],
            'App\\Controller\\Guest\\ArticlesController::showArticleById' => ['privates', '.service_locator.IqSceiR.App\\Controller\\Guest\\ArticlesController::showArticleById()', 'getArticlesControllershowArticleByIdService', true],
            'App\\Controller\\Guest\\ArticlesController::listCategoriesFromDb' => ['privates', '.service_locator.MEncpnc.App\\Controller\\Guest\\ArticlesController::listCategoriesFromDb()', 'getArticlesControllerlistCategoriesFromDbService', true],
            'App\\Controller\\Guest\\ArticlesController::showCategoryById' => ['privates', '.service_locator.MEncpnc.App\\Controller\\Guest\\ArticlesController::showCategoryById()', 'getArticlesControllershowCategoryByIdService', true],
            'App\\Controller\\Guest\\UserController::insertUser' => ['privates', '.service_locator.r_XOrDH.App\\Controller\\Guest\\UserController::insertUser()', 'getUserControllerinsertUserService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\Admin\\AdminArticlesController:adminListArticlesFromDb' => ['privates', '.service_locator.IqSceiR.App\\Controller\\Admin\\AdminArticlesController::adminListArticlesFromDb()', 'getAdminArticlesControlleradminListArticlesFromDbService', true],
            'App\\Controller\\Admin\\AdminArticlesController:deleteArticle' => ['privates', '.service_locator.dVEa85z.App\\Controller\\Admin\\AdminArticlesController::deleteArticle()', 'getAdminArticlesControllerdeleteArticleService', true],
            'App\\Controller\\Admin\\AdminArticlesController:insertArticles' => ['privates', '.service_locator.PFXmw2u.App\\Controller\\Admin\\AdminArticlesController::insertArticles()', 'getAdminArticlesControllerinsertArticlesService', true],
            'App\\Controller\\Admin\\AdminArticlesController:updateArticles' => ['privates', '.service_locator.f0MmMYB.App\\Controller\\Admin\\AdminArticlesController::updateArticles()', 'getAdminArticlesControllerupdateArticlesService', true],
            'App\\Controller\\Admin\\AdminCategoriesController:adminListCategoriesFromDb' => ['privates', '.service_locator.MEncpnc.App\\Controller\\Admin\\AdminCategoriesController::adminListCategoriesFromDb()', 'getAdminCategoriesControlleradminListCategoriesFromDbService', true],
            'App\\Controller\\Admin\\AdminCategoriesController:deleteCategory' => ['privates', '.service_locator.uZAU9uc.App\\Controller\\Admin\\AdminCategoriesController::deleteCategory()', 'getAdminCategoriesControllerdeleteCategoryService', true],
            'App\\Controller\\Admin\\AdminCategoriesController:insertCategories' => ['privates', '.service_locator.P.blNFL.App\\Controller\\Admin\\AdminCategoriesController::insertCategories()', 'getAdminCategoriesControllerinsertCategoriesService', true],
            'App\\Controller\\Admin\\AdminCategoriesController:updateCategories' => ['privates', '.service_locator.AAtH1eF.App\\Controller\\Admin\\AdminCategoriesController::updateCategories()', 'getAdminCategoriesControllerupdateCategoriesService', true],
            'App\\Controller\\Admin\\AdminUserController:insertAdminUser' => ['privates', '.service_locator.r_XOrDH.App\\Controller\\Admin\\AdminUserController::insertAdminUser()', 'getAdminUserControllerinsertAdminUserService', true],
            'App\\Controller\\Guest\\ArticlesController:listArticlesFromDb' => ['privates', '.service_locator.IqSceiR.App\\Controller\\Guest\\ArticlesController::listArticlesFromDb()', 'getArticlesControllerlistArticlesFromDbService', true],
            'App\\Controller\\Guest\\ArticlesController:showArticleById' => ['privates', '.service_locator.IqSceiR.App\\Controller\\Guest\\ArticlesController::showArticleById()', 'getArticlesControllershowArticleByIdService', true],
            'App\\Controller\\Guest\\ArticlesController:listCategoriesFromDb' => ['privates', '.service_locator.MEncpnc.App\\Controller\\Guest\\ArticlesController::listCategoriesFromDb()', 'getArticlesControllerlistCategoriesFromDbService', true],
            'App\\Controller\\Guest\\ArticlesController:showCategoryById' => ['privates', '.service_locator.MEncpnc.App\\Controller\\Guest\\ArticlesController::showCategoryById()', 'getArticlesControllershowCategoryByIdService', true],
            'App\\Controller\\Guest\\UserController:insertUser' => ['privates', '.service_locator.r_XOrDH.App\\Controller\\Guest\\UserController::insertUser()', 'getUserControllerinsertUserService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\SecurityController::login()', 'getSecurityControllerloginService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\Admin\\AdminArticlesController::adminListArticlesFromDb' => '?',
            'App\\Controller\\Admin\\AdminArticlesController::deleteArticle' => '?',
            'App\\Controller\\Admin\\AdminArticlesController::insertArticles' => '?',
            'App\\Controller\\Admin\\AdminArticlesController::updateArticles' => '?',
            'App\\Controller\\Admin\\AdminCategoriesController::adminListCategoriesFromDb' => '?',
            'App\\Controller\\Admin\\AdminCategoriesController::deleteCategory' => '?',
            'App\\Controller\\Admin\\AdminCategoriesController::insertCategories' => '?',
            'App\\Controller\\Admin\\AdminCategoriesController::updateCategories' => '?',
            'App\\Controller\\Admin\\AdminUserController::insertAdminUser' => '?',
            'App\\Controller\\Guest\\ArticlesController::listArticlesFromDb' => '?',
            'App\\Controller\\Guest\\ArticlesController::showArticleById' => '?',
            'App\\Controller\\Guest\\ArticlesController::listCategoriesFromDb' => '?',
            'App\\Controller\\Guest\\ArticlesController::showCategoryById' => '?',
            'App\\Controller\\Guest\\UserController::insertUser' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\Admin\\AdminArticlesController:adminListArticlesFromDb' => '?',
            'App\\Controller\\Admin\\AdminArticlesController:deleteArticle' => '?',
            'App\\Controller\\Admin\\AdminArticlesController:insertArticles' => '?',
            'App\\Controller\\Admin\\AdminArticlesController:updateArticles' => '?',
            'App\\Controller\\Admin\\AdminCategoriesController:adminListCategoriesFromDb' => '?',
            'App\\Controller\\Admin\\AdminCategoriesController:deleteCategory' => '?',
            'App\\Controller\\Admin\\AdminCategoriesController:insertCategories' => '?',
            'App\\Controller\\Admin\\AdminCategoriesController:updateCategories' => '?',
            'App\\Controller\\Admin\\AdminUserController:insertAdminUser' => '?',
            'App\\Controller\\Guest\\ArticlesController:listArticlesFromDb' => '?',
            'App\\Controller\\Guest\\ArticlesController:showArticleById' => '?',
            'App\\Controller\\Guest\\ArticlesController:listCategoriesFromDb' => '?',
            'App\\Controller\\Guest\\ArticlesController:showCategoryById' => '?',
            'App\\Controller\\Guest\\UserController:insertUser' => '?',
            'App\\Controller\\SecurityController:login' => '?',
        ]);
    }
}
