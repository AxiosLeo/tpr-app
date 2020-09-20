<?php

namespace app\index;

use tpr\App;

require_once __DIR__ . '/../vendor/autoload.php';

App::debugMode(false);

App::default()
    ->config([
        'namespace'       => 'app',           // app base namespace, ### this is required ###
        'lang'            => 'zh-cn',         // default language set name
        'cache_time'      => 60,              // global cache time for config&route data
        'force_route'     => false,           // forces use routing
        'remove_headers'  => [],              // remove some header before send response
        'server_options'  => [],              // for ServerHandler custom config.
        'response_config' => [],              // response config, see detail on 	pr\models\ResponseModel.

        'default_content_type_cgi' => 'html', // default content-type on cgi mode
        'default_content_type_ajax'=> 'json', // default content-type on api request
        'default_content_type_cli' => 'text', // default content-type on command line mode

        'dispatch_rule'            => '{app_namespace}\{module}\controller\{controller}',  // controller namespace spelling rule
    ])
    ->run();
