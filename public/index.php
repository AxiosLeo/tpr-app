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

Path::framework(dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR);
Path::root(dirname(__DIR__) . DIRECTORY_SEPARATOR);
Path::vendor(Path::root() . "vendor" . DIRECTORY_SEPARATOR);

App::mode(true)->run();