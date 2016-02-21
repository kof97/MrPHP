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

class MrRun
{
	/**
     * run application.
     *
     * @return void
     */
	static public function run()
	{
		$app = self::_createApplication('MrApplication');
        $app->start();
	}

	/**
     * run application.
     *
     * @param string $class className.
     * @return object
     */
	static private function _createApplication($class)
    {
        $classkey = strtolower($class);

        if (!Mr::getA($classkey)) {
            Mr::setA($classkey, new $class);
        }
        return Mr::getA($classkey);
    }

}