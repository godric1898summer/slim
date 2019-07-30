<?php
/**
 * Created by PhpStorm.
 * Authon: akio <medue8@gmail.com>
 * Date: 7/30/19
 * Time: 14:42
 */

require '../vendor/autoload.php';

(new \Symfony\Component\Dotenv\Dotenv(false))->loadEnv(dirname(__DIR__) . "/.env.local");

$env = $_ENV['APP_ENV']??'local';

$debug = $_ENV['APP_DEBUG']??false;

if($debug){
    \Symfony\Component\Debug\Debug::enable();
    \Symfony\Component\Debug\ExceptionHandler::register();
}

// 加载配置
$config = @include dirname(__DIR__) . "/config/config.$env.php";

if(false === $config){
    throw new \Symfony\Component\Dotenv\Exception\PathException('config file does not exist');
}

$app = new \Slim\App($config);
include dirname(__DIR__) . "/config/router.php";
$app->run();
