<?php 

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
 * @param int $segment the uri segment.
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
 * show the error message.
 * 
 * @param string $error error message.
 * @return void
 */
function showError($error)
{
	echo "<h2 style=''>$error</h2>";
	exit;	

}

/**
 * import file.
 * 
 * @param string $path file path.
 * @param boolean $show whether show error message.
 * @return mixed
 */
function importClass($path, $show = true)
{
	if (file_exists($path)) {
		include_once($path);
	} else {
		if ($show) {
			showError("couldn't find the file which is imported, please check your file path !");
		} else {
			return false;
		}
	}

}
