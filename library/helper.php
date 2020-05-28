<?php

declare(strict_types=1);

function halt(...$data)
{
    call_user_func_array('dump', $data);
    die();
}
