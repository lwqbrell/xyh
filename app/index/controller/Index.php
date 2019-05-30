<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 2019/5/30
 * Time: 21:43
 */

namespace app\index\controller;


class Index
{
    public function index(){
        $view=\lib\Register::getRegister('smarty');
        $view->assign('title', 'this is index/index/index');
        $view->display('index.html');
    }
    public function name(){
        $view=\lib\Register::getRegister('smarty');
        $view->assign('title', 'this is index/index/name');
        $view->display('index.html');
    }
}