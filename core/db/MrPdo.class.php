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

class MrPdo extends Database
{
	// self obj
	private $db;
	
	function __construct($class = __CLASS__)
	{
		if (Mr::getClass($class)) {
			$this->db = Mr::getClass($class);
		}
		var_dump(Mr::getClass($class));
		var_dump($class);

	}

	public function query()
	{
		echo 1;
		var_dump($this->db);
	}



}