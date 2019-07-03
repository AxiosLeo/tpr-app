<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-03-20 14:50
 */

namespace tpr\index;

use tpr\App;
use tpr\Path;

require_once __DIR__ . '/../vendor/autoload.php';

Path::root(dirname(__DIR__) . DIRECTORY_SEPARATOR);

App::run('App\\', true);
