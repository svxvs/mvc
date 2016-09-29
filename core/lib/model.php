<?php
/**
 * Created by PhpStorm.
 * User: SVector
 * Date: 2016.9.29
 * Time: 9:16
 */
namespace core\lib;

class model extends \PDO
{
    public function __construct()
    {
        $dsn='mysql:host=localhost;dbname=test';
        $username='root';
        $passwd='';
        try{
            parent::__construct($dsn, $username, $passwd);
        }catch (\PDOException $e){
            p($e->getMessage());
        }
    }
}