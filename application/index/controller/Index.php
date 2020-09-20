<?php

namespace app\index\controller;

use tpr\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
