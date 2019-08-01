<?php
/**
 * Created by PhpStorm.
 * Authon: akio <medue8@gmail.com>
 * Date: 8/1/19
 * Time: 14:56
 */

/** @var $app \Slim\App */

$app->group('/client', function() use ($app){
    // host/client/index
    $app->get('/index', \App\Controller\Client\Index::class.':index');
});