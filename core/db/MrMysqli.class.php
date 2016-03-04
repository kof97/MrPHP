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

class MrMysqli extends Database
{
    // self obj
	private $db;
	
	function __construct($class = __CLASS__)
	{
		if (Mr::getClass($class)) {
			$this->db = Mr::getClass($class);
		}

	}

	public function query()
	{
		var_dump($this->db);
	}


}