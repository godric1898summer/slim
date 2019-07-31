<?php
/**
 * Created by PhpStorm.
 * Authon: akio <medue8@gmail.com>
 * Date: 7/31/19
 * Time: 10:53
 */

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Slim\Container;

/** @var Container $container */
$container = require_once APP_ROOT . '/src/bootstrap.php';

ConsoleRunner::run(
    ConsoleRunner::createHelperSet($container[EntityManager::class])
);
