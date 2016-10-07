<?php
/**
 * Created by PhpStorm.
 * User: SVector
 * Date: 2016.10.7
 * Time: 11:11
 */

namespace app\model;
use core\lib\model;

class testModel extends model
{
    public $tablename='t1';

    public function get_all(){
        $data=$this->select($this->tablename,'*');
        return $data;
    }


    public function add_one($data){
        $this->insert($this->tablename,$data);
    }
}