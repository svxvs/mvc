<?php
/**
 * Created by PhpStorm.
 * User: SVector
 * Date: 2016.9.29
 * Time: 8:58
 */
namespace core\lib;
class route
{
    public $ctrl;
    public $action;
    public function __construct()
    {
        /**
         * 1.隐藏index.php
         * 2.获取URL 参数部分
         * 3.返回对应控制器和方法
         */
        if(
            isset($_SERVER['REQUEST_URI'])
            &&$_SERVER['REQUEST_URI']!='/'
        ){
            //读取 请求的url ，分解
            $path=$_SERVER['REQUEST_URI'];
            $path=str_replace('/IMOOC/','',$path);
            $patharr=explode('/',trim($path,'/'));
            //取出控制器名
            if(isset($patharr[0])){
                $this->ctrl=$patharr[0];
            }
            unset($patharr[0]);
            //取出方法名
            if(isset($patharr[1])){
                $this->action=$patharr[1];
                unset($patharr[1]);
            }else{
                $this->action='index';
            }
            //获取url中的GET参数
            //例如：id/1/str/2/test/3
            $count=count($patharr)+2;
            $i=2;
            while ($i<$count){
                if(isset($patharr[$i+1])){
                    $_GET[$patharr[$i]]=$patharr[$i+1];
                }
                $i=$i+2;
            }
        }
    }
}