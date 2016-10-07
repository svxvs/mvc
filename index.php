<?php
/**
 * Created by PhpStorm.
 * User: SVector
 * Date: 2016.9.29
 * Time: 8:44
 */
/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 */
//1.定义初始化常量
define('IMOOC',realpath('./'));
define('CORE',IMOOC.'/core');
define('APP',IMOOC.'/app');
define('MODULE','app');
define('DEBUG',true);
date_default_timezone_set('PRC');

//1.1调试模式开关：是否启用PHP错误提示
include "vendor/autoload.php";
if(DEBUG){

    $whoops = new \Whoops\Run;
    $c_errorTitle='框架出错了';
    $c_option=new \Whoops\Handler\PrettyPageHandler();
    $c_option->setPageTitle($c_errorTitle);
    $whoops->pushHandler($c_option);
    $whoops->register();

    ini_set('display_errors','on');
    error_reporting(E_ALL);
}else{
    ini_set('display_errors','off');
}


//2.加载自定义函数集合 核心引擎入口
include CORE.'/common/function.php';
include CORE.'/imooc.php';


//2.1注册给定的函数作为 __autoload 的实现
spl_autoload_register('\core\imooc::load');


//3.启动
\core\imooc::run();