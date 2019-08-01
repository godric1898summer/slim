<?php
/**
 * Created by PhpStorm.
 * Authon: akio <medue8@gmail.com>
 * Date: 8/1/19
 * Time: 14:56
 */

/** @var $app \Slim\App */

$app->group('/admin', function() use ($app){
    // // host/admin/index
    $app->get('/index', \App\Controller\Admin\Index::class.':index');

    $app->get('/user-info', \App\Controller\Admin\Index::class.':userInfo');
//        ->add(\App\Middleware\RolesAuth::class.':certification');
});