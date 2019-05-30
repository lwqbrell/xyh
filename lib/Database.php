<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 2019/5/30
 * Time: 14:57
 */

namespace lib;
use \conf\Config;

class Database
{
    static private $_db;
    private function __construct()
    {
        self::$_db=new \PDO(Config::DNS,Config::USER,Config::PWD);
    }
    static public function getInstance(){
        if (self::$_db){
            return self::$_db;
        }else{
           return self::$_db=new self();
        }
    }

}