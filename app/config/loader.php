<?php

$loader = new \Phalcon\Loader();


$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->modelsDir,
        $config->application->mapperDir,
        $config->application->dtoDir,
        $config->application->modelsCriteriaDir,
        $config->application->modelsCriteriaContactsDir,
    ]
)->register();
