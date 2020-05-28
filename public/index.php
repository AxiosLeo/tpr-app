<?php

namespace tpr\index;

use tpr\App;

require_once __DIR__ . '/../vendor/autoload.php';

App::debugMode(true);

App::default()
    ->setOption('namespace', 'app')
    ->run();
