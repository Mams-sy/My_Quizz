<?php

namespace ContainerHeuCjfb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVerifyControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\VerifyController' shared autowired service.
     *
     * @return \App\Controller\VerifyController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/VerifyController.php';

        $container->services['App\\Controller\\VerifyController'] = $instance = new \App\Controller\VerifyController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\VerifyController', $container));

        return $instance;
    }
}