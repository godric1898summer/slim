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
