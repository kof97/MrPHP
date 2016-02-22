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
class MrController
{
    

	/**
     * redirect uri.
     *
     * @param mixed  $route route uri.
     * @return void
     */
    public function redirect($route)
    {
        $app = Mr::getA("MrApplication");
        $app->runController($route);

    }
}
