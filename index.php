<?php
define('BASEDIR',__DIR__);
require BASEDIR.'/vendor/autoload.php';
require BASEDIR.'/lib/AutoRequire.php';
spl_autoload_register('\\lib\\AutoRequire::autoloader');

\lib\App::run();
