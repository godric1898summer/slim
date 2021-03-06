<?php
/**
 * Created by PhpStorm.
 * Authon: akio <medue8@gmail.com>
 * Date: 7/31/19
 * Time: 10:59
 */

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Cache\FilesystemCache;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\ORM\Tools\Setup;
use Slim\Container;

require_once APP_ROOT . '/vendor/autoload.php';

(new \Symfony\Component\Dotenv\Dotenv(false))->loadEnv(APP_ROOT . "/.env.local");

$env = $_ENV['APP_ENV']??'local';

$container = new Container(require APP_ROOT . "/config/config.$env.php");

// templates
$container['view'] = function() use ($container){
    $view = new \Slim\Views\Twig(APP_ROOT . '/temp', ['cache' => APP_ROOT . '/var/temp']);

    /** @var \Slim\Router $router */
    $router = $container->get('router');

    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));

    $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));

    return $view;
};

// doctrine
$container[EntityManager::class] = function (Container $container): EntityManager {
    $config = Setup::createAnnotationMetadataConfiguration(
        $container['settings']['doctrine']['metadata_dirs'],
        $container['settings']['doctrine']['dev_mode']
    );

    $config->setMetadataDriverImpl(
        new AnnotationDriver(
            new AnnotationReader,
            $container['settings']['doctrine']['metadata_dirs']
        )
    );

    $config->setMetadataCacheImpl(
        new FilesystemCache(
            $container['settings']['doctrine']['cache_dir']
        )
    );

    return EntityManager::create(
        $container['settings']['doctrine']['connection'],
        $config
    );
};

return $container;