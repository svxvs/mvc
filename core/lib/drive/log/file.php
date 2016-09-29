<?php
/**
 * Created by PhpStorm.
 * User: SVector
 * Date: 2016.9.29
 * Time: 17:01
 */
namespace core\lib\drive\log;
use core\lib\conf;

class file
{
    public $path;#日志存储位置
    public function __construct(){
        $conf=conf::get('OPTION','log');
        $this->path=$conf['PATH'];
    }
    public function log($message,$file='log'){
        /**
         * 1.确定文件存储位置是否存在
         *  不存在则新建目录
         * 2.写入日志
         */
        if(!is_dir($this->path)){
            mkdir($this->path,0777,true);
        }
        return file_put_contents(
            $this->path.$file.'.php',
            date('Y-m-d H:i:s').json_encode($message).PHP_EOL,
            FILE_APPEND
        );
    }
}