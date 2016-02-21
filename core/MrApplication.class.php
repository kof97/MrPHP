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

class MrApplication
{
	/**
     * start function.
     *
     * @return void
     */
    public function start()
    {
        if (AUTO_START_SESSION) {
            session_start();
        }
        $this->runController();
    }

    /**
     * default controller.
     * 
     * @param string $route route.
     * @return mixed
     */
    public function runController()
    {
        $route = processRoute();

        echo $route;
    }

}