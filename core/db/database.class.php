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
    
    public function db()
    {
        return Mr::getClass("dbClass");

    }

    public function conn()
    {
        return Mr::getClass("db");

    }

}