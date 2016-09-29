<?php
/**
 * Created by PhpStorm.
 * User: SVector
 * Date: 2016.9.29
 * Time: 9:57
 */
namespace core\lib;

class conf
{
    static public $conf=array();

    static public function get($name,$file){
        /**
         * 1.如果判断配置文件 存在,如果存在直接调用配置
         * 2.如果判断配置文件不存在，
         * 3.缓存配置
         */
        if(isset(self::$conf[$file])){
            return self::$conf[$file][$name];
        }else{
            $path=IMOOC.'/core/config/'.$file.'.php';
            if(is_file($path)){
                $conf=include $path;
                if(isset($conf[$name])){
                    self::$conf[$file]=$conf;
                    return $conf[$name];
                }else{
                    throw new \Exception('没有这个配置项'.$name);
                }

            }else{
                throw new \Exception('找不到配置文件'.$file);
            }
        }
    }

    static public function all($file){
        if(isset(selp::$conf[$file])){
            return self::$conf[$file];
        }else{
            $path=IMOOC.'/core/config/'.$file.'.php';
            if (is_file($path)){
                $conf=include $path;
                self::$conf[$file]=$conf;
                return $conf;
            }else{
                throw new \Exception('找不到配置文件'.$file);
            }
        }
    }
}
