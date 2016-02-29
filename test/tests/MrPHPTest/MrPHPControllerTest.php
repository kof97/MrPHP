<?php 
	
class MrPHPControllerTest extends PHPUnit_Framework_TestCase
{
	public $controller;

	function __construct()
	{
		$this->controller = new MrController();
	}

	public function testUriSegment()
	{
		$seg = uriSegment(1);

		$this->assertEmpty($seg);

	}
	
}




