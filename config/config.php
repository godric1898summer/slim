<?php
/**
 * Created by PhpStorm.
 * Authon: akio <medue8@gmail.com>
 * Date: 7/30/19
 * Time: 15:13
 */

return [
    'settings' => [
        'doctrine' => [
            'dev_mode' => true,
            'cache_dir' => APP_ROOT . '/var/doctrine',
            'metadata_dirs' => [APP_ROOT . '/src/Domain'],
            'connection'    => [
                'driver'    => 'pdo_mysql',
                'host'      => 'localhost',
                'port'      => 3306,
                'dbname'    => 'test',
                'user'      => 'root',
                'password'  => '',
                'charset'   => 'utf-8'
            ]
        ]
    ]
];