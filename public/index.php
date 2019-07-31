<?php
/**
 * Created by PhpStorm.
 * Authon: akio <medue8@gmail.com>
 * Date: 7/30/19
 * Time: 14:42
 */

define('APP_ROOT', dirname(__DIR__));

require APP_ROOT . '/vendor/autoload.php';

(new \Symfony\Component\Dotenv\Dotenv(false))->loadEnv(APP_ROOT . "/.env.local");

$env = $_ENV['APP_ENV']??'local';

$debug = $_ENV['APP_DEBUG']??false;

if($debug){
    \Symfony\Component\Debug\Debug::enable();
    \Symfony\Component\Debug\ExceptionHandler::register();
}

// 加载配置
$config = @include APP_ROOT . "/config/config.$env.php";

if(false === $config){
    throw new \Symfony\Component\Dotenv\Exception\PathException('config file does not exist');
}

@include APP_ROOT . "/src/bootstrap.php";

$app = new \Slim\App($container);
include APP_ROOT . "/config/router.php";

$app->run();
