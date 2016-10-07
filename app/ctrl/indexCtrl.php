<?php
/**
 * Created by PhpStorm.
 * User: SVector
 * Date: 2016.9.29
 * Time: 9:13
 */
namespace app\ctrl;
use core\lib\model;

class indexCtrl extends \core\imooc
{
    public function index()
    {
        $this->display('add.html');
    }
    //test_for_mvc_add
    public function mvc_add(){
        $data=$_POST['add_test'];

        $model=new \app\model\testModel();
        $model->add_one(
            array('a'=>$data)
        );
        $this->mvc_show();
    }
    //test_for_mvc_delete
    public function mvc_save(){

    }
    //test_for_mvc_update
    public function mvc_update(){

    }
    //test_for_mvc_select
    public function mvc_show(){
        $model=new \app\model\testModel();
        $data=$model->get_all();
        $this->assign('data',$data);
        $this->display('show.html');
    }
}