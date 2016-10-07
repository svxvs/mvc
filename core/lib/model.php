<?php
/**
 * Created by PhpStorm.
 * User: SVector
 * Date: 2016.9.29
 * Time: 9:16
 */
namespace core\lib;

class model extends \medoo
{
    public function __construct()
    {
        $option=conf::all('database');
        parent::__construct($option);
    }
}