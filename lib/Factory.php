<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 2019/5/30
 * Time: 14:57
 */

namespace lib;


class Factory
{
    static function createDatabase(){
        $db=\lib\Database::getInstance();
        return $db;
    }
}