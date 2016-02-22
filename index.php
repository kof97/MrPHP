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
defined('MAIN_PATH') or define('MAIN_PATH', FRAME_PATH . 'application' . DS);
// 项目目录名
defined('ITEM_NAME') or define('ITEM_NAME', substr(dirname(__FILE__), strrpos(dirname(__FILE__), DS) + 1));

// 默认 controller
defined('DEFAULT_CONTROLLER') or define('DEFAULT_CONTROLLER', 'c1c/welcome');
// 默认 method
defined('DEFAULT_METHOD') or define('DEFAULT_METHOD', 'kof');

require_once(CORE_PATH . 'Mr.class.php');

function __autoload($className) 
{
	$fileName = CORE_PATH . $className . ".class.php";
	if (file_exists($fileName)) {
		include_once($fileName);
	}

}

Mr::init();