<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Checklogin
{
    public function index()
    {
        return $this->fetch('index');

    }
}

