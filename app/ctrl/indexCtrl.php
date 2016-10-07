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
        p($_POST);
    }
    //test_for_mvc_delete
    public function mvc_save(){

    }
    //test_for_mvc_update
    public function mvc_update(){

    }
    //test_for_mvc_select
    public function mvc_select(){

    }
}