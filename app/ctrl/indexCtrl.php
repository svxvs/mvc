<?php
/**
 * Created by PhpStorm.
 * User: SVector
 * Date: 2016.9.29
 * Time: 9:13
 */
namespace app\ctrl;

class indexCtrl extends \core\imooc
{
    public function index()
    {
        $data='Hello World';
        $title='视图文件';

        //测试model
        $model=new \core\lib\model();
        $model->query('set names utf8');

//        $sql='select *from t1';
//        $data=$model->query($sql)->fetchAll();
//        p($data);

        $this->assign('titel',$title);
        $this->assign('data',$data);
        $this->display('index.html');
    }
}