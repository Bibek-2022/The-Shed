<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ini_set('file_uploads', 'On');
    
    define('APP_ROOT', realpath(dirname(__FILE__)).'/');
    define('RES_PATH', '/res/');

    require_once APP_ROOT.'core/App.php';
    require_once APP_ROOT.'core/Controller.php';
    require_once APP_ROOT.'core/Database.php';
    require_once APP_ROOT.'core/Helper.php';