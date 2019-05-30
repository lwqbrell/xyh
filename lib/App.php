<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 2019/5/30
 * Time: 19:13
 */

namespace lib;
use \PHPMailer\PHPMailer\Exception;

/**
 * Class App
 * @package lib
 */
class App
{

    function __construct()
    {

    }

    /**
     * 应用运行入口
     */
    static public function run()
    {
        // 实例化数据库
        Factory::createDatabase();
        // 实例化smarty模板引擎
        Factory::createSmarty();
        $uri=preg_split('/\//',$_SERVER['REQUEST_URI']);
        // 提取URL参数
        if ($_SERVER['REQUEST_URI']!='/' && count($uri)>=4){
            $uri=preg_split('/\//',$_SERVER['REQUEST_URI']);
            $model=$uri[1];
            $controller=ucfirst($uri[2]);
            $method=$uri[3];

        }else{
            $model='index';
            $controller='Index';
            $method='index';

        }
        try{
            $namespace= "\\app\\".$model."\\controller\\$controller";
            $class=new $namespace();
            $class->$method();

        }catch (Exception $e){
            print_r($e->errorMessage(),$e->getCode());
        }


    }

}