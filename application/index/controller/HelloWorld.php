<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Request;

class HelloWorld extends Controller
{
    public function index()
    {
        print_r($this->request->param());
        die;
        var_dump(empty(array('a'=>454)));
    }

    public function test()
    {
        echo '刘海洋是傻吊';
    }

    public function test2()
    {
        return 'hahhahah';
    }
}