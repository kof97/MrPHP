<?php 

define("ACC", true);
define("DS", DIRECTORY_SEPARATOR);
define("LIBRARY_PATH", realpath("../library"));


//var_dump(LIBRARY_PATH);


//include_once(LIBRARY_PATH . DS . "index.php");

function __autoload($class)
{
	$path = LIBRARY_PATH . DS . "core" . DS . $class . ".class.php";

	if (file_exists($path)) {
		include_once($path);
	}
}

spl_autoload_register('__autoload');















