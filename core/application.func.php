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
 * @return string
 */
function processRoute()
{
	$requestUri = $_SERVER["REQUEST_URI"];

	// $flag if exists index.php
	$judgeIndex = strpos($requestUri, "index.php");
	if ($judgeIndex) {
		$pathInfo = substr($requestUri, $judgeIndex + 9);
	} else {
		// if whole uri
		$judgeUri = strpos($requestUri, ITEM_NAME);
		if ($judgeUri) {
			$pathInfo = substr($requestUri, $judgeUri + strlen(ITEM_NAME));
		} else {
			$pathInfo = $requestUri;
		}
	}

	return $pathInfo;

}

/**
 * get uri segment.
 * 
 * @return string
 */
function uriSegment($segment)
{
	$getRoute = processRoute();
	$route = explode('/', $getRoute);

	if ($segment >= count($route)) {
		return "";
	} else {
		return $route[$segment];
	}	

}

/**
 * redirect uri.
 * 
 * @param 	
 * @return
 */
function redirect()
{

}