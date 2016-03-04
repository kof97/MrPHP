<?php 
/**
 * Mr PHP
 *
 * PHP version 5
 *
 * @category PHP
 * @package  Core.base
 * @author   LYJ <1048434786@qq.com>
 * @license  
 * @version  
 * @link     
 */
if (!defined('ACC')) exit('this script access allowed');

class Database
{
    // 
    private $_db;

    public function db()
    {
        if (Mr::getClass("db")) {
            $this->_db = Mr::getClass("db");
        }

        return Mr::getClass("dbClass");

    }

    function __call($method, $args)
    {
        var_dump(get_class($this->_db));
        
    }





}