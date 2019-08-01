<?php
/**
 * Created by PhpStorm.
 * Authon: akio <medue8@gmail.com>
 * Date: 7/30/19
 * Time: 16:25
 */

/** @var $app \Slim\App */
// $app
$app->get('/', \App\Controller\Index::class.':index');
$app->get('/add-data/{age}', \App\Controller\TestDoctrine::class.':addData');
$app->get('/find-data/{id}', \App\Controller\TestDoctrine::class.':findData');

/**
 * 路由组
 * 如果路由很多的情况下
 * 建议建路由文件夹，按不同的组分成不同的文件
 */
if(file_exists(APP_ROOT . '/config/routing')){

    foreach (glob(APP_ROOT . '/config/routing/*.php') as $row){
        @include $row;
    }
}

// 路由组演示
$app->group('/api', function() use ($app){
    $app->group('/v1', function() use ($app){
        // host/api/v1/index
        $app->get('/index', \App\Controller\Api\Index::class.':index');
    });
});
