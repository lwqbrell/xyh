<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 2019/5/30
 * Time: 13:16
 */

namespace lib;


class AutoRequire
{
    static public function auto($class){
        require BASEDIR.'\\'.$class.'.php';
    }
}