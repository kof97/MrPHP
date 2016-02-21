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

// 开启调试 是
defined('DEBUG') or define('DEBUG', true);
// 自启动session 是
defined('AUTO_START_SESSION') or define('AUTO_START_SESSION', true);

// 目录分隔符
defined('DS') or define('DS', DIRECTORY_SEPARATOR);
// 框架目录
defined('FRAME_PATH') or define('FRAME_PATH', dirname(__FILE__) . DS);
// 核心目录
defined('CORE_PATH') or define('CORE_PATH', FRAME_PATH . 'core' . DS);
// 主目录
defined('MAIN_PATH') or define('MAIN_PATH', FRAME_PATH . 'main' . DS);

require_once(CORE_PATH . 'Mr.class.php');

function __autoload($classname) 
{
	$filename = CORE_PATH . $classname . ".class.php";
	include_once($filename);
}

Mr::init();