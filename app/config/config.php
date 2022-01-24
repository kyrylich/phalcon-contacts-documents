<?php


defined('BASE_PATH') || define('BASE_PATH', getenv('BASE_PATH') ?: realpath(dirname(__FILE__) . '/../..'));
defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/app');

return new \Phalcon\Config(
    [
    'database' => [
        'adapter' => 'Postgresql',
        'host' => getenv('DATABASE_HOST'),
        'username' => getenv('DATABASE_USER'),
        'password' => getenv('DATABASE_PASSWORD'),
        'dbname' => getenv('DATABASE_DB'),
    ],
    'application' => [
        'appDir' => APP_PATH . '/',
        'controllersDir' => APP_PATH . '/controllers/',
        'modelsDir' => APP_PATH . '/models/',
        'modelsCriteriaContactsDir' => APP_PATH . '/models/criteria/contacts/',
        'modelsCriteriaDir' => APP_PATH . '/models/criteria/',
        'migrationsDir' => APP_PATH . '/migrations/',
        'viewsDir' => APP_PATH . '/views/',
        'pluginsDir' => APP_PATH . '/plugins/',
        'dtoDir' => APP_PATH . '/dto/',
        'mapperDir' => APP_PATH . '/mapper/',
        'cacheDir' => BASE_PATH . '/cache/',
        'baseUri' => '/',
    ]
    ]
);
