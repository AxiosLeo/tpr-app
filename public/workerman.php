<?php

namespace app\index;

use tpr\App;

require_once __DIR__ . '/../vendor/autoload.php';

App::debugMode(false);

App::registerServer('workerman', \tpr\server\WorkermanServer::class);

App::drive('workerman')
    ->config([
        'namespace'       => 'app',           // app base namespace, ### this is required ###
        'lang'            => 'zh-cn',         // default language set name
        'force_route'     => false,           // forces use routing
        'remove_headers'  => [],              // remove some header before send response
        // for ServerHandler custom config.
        'server_options'  => [
            'protocol' => 'http', // support websocket | http | tcp | other custom protocol
            'host'     => '0.0.0.0',
            'port'     => 8088,
            'worker'   => 4,      // the number of worker process
            'context'  => [],     // for enable ssl : https://github.com/walkor/Workerman#enable-ssl
            'options'  => [],     // properties of worker. https://github.com/walkor/workerman-manual/blob/master/english/src/worker-development/name.md
        ],
        'response_config' => [],              // response config, see detail on 	pr\models\ResponseModel.

        'default_content_type_cgi'  => 'html', // default content-type on cgi mode
        'default_content_type_ajax' => 'json', // default content-type on api request
        'default_content_type_cli'  => 'text', // default content-type on command line mode

        'dispatch_rule' => '{app_namespace}\{module}\controller\{controller}',  // controller namespace spelling rule
    ])
    ->run();
