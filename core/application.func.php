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

/**
 * process route.
 *
 * @return void
 */
function processRoute()
{
	$requestUri = $_SERVER['PATH_INFO'];

	$route['a'] = $requestUri;

	return $route;
}

/**
 * get uri segment
 * 
 * @return string
 */
function uriSegment()
{

}