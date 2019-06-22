<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-03-19 14:26
 */

// see : https://github.com/nikic/FastRoute
return [
    "route_name" => [
        "rule"         => "/index/{id:\d+}[/{title}]",
        "method"       => "GET",
        "handler"      => "App\\index\\controller\\Index::index",
        "requirements" => []
    ]
];