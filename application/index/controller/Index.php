<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Request;
use think\Response;
use \think\Validate;

class Index extends Controller
{
    public function index()
    {

        return $this->fetch('register');
        /*$this->assign('name','ytc');
        return $this->fetch('index');*/
    }


    public function test()
    {
        return view('index',['name'=>'math']);
    }

}
