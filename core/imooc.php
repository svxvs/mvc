<?php
/**
 * Created by PhpStorm.
 * User: SVector
 * Date: 2016.9.29
 * Time: 8:51
 */
namespace core;

class imooc
{
    public static $classMap=array();
    public $assign;

    static public function run()
    {

        \core\lib\log::init();
        \core\lib\log::log('test');


        $route=new \core\lib\route();   //加载路由类
        $ctrlClass=$route->ctrl;
        $action=$route->action;
        $ctrlfile=APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
        $ctrlClass='\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
        if(is_file($ctrlfile)){
            include $ctrlfile;
            $ctrl=new $ctrlClass();
            $ctrl->$action();

            \core\lib\log::log('ctrl:'.$ctrlClass.'      action:'.$action);
        }else{
            throw new \Exception('找不到控制器'.$ctrlClass);
        }
    }

    static public function load($class)
    {
        if(isset($classMap[$class])){
            return true;
        }else{
            $class=str_replace('\\','/',$class);
            $file=IMOOC.'/'.$class.'.php';
            if (is_file($file)){
                include $file;
                self::$classMap[$class]=$class;
            }else{
                return false;
            }
        }
    }

    public function assign($name,$value){
        $this->assign[$name]=$value;
    }
    public function display($file){
        $path=APP.'/views/'.$file;
        if (is_file($path)){
            \Twig_Autoloader::register();
            $loader = new \Twig_Loader_Filesystem(
                APP.'/views'
            );
            $twig = new \Twig_Environment($loader, array(
                'cache' => IMOOC.'/cache/twig_cache',
                'debug'=>DEBUG
            ));
            $template = $twig->loadTemplate($file);
            $template->display(
                $this->assign?$this->assign:array()
            );
        }
    }
}