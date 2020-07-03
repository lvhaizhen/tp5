<?php
namespace app\index\controller;
use think\Db;
use think\Controller;

class HelloWorld extends Controller
{
    public function getData()
    {
        $result = Db::name('account')->where('id',1)->find();
        return $this->fetch('getdata');
    } 
}