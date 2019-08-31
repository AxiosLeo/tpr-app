<?php

namespace tpr\index;

use tpr\App;
use tpr\Path;

require_once __DIR__ . '/../vendor/autoload.php';

Path::root(realpath(dirname(__DIR__)) . \DIRECTORY_SEPARATOR);
Path::vendor(Path::root() . 'vendor' . \DIRECTORY_SEPARATOR);

App::default()
    ->setOption("namespace", "app\\")
    ->setOption('debug', true)
    ->run();
