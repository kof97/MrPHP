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

class Mr
{
	// application list
	static private $_a;

	/**
     * init application.
     *
     * @return mixed
     */
	static public function init()
	{
		if (!DEBUG) {
			error_reporting(0);
		}
		Mr::import(CORE_PATH . 'application.func.php');

		MrRun::run();
	}

	/**
     * import file or path.
     *
     * @param string  $path 	 file path.
     * @param boolean $testExist allow test exist.
     * @return mixed
     */
    static public function import($path, $testExist = true)
    {
    	static $succeedImportFile = array();

    	if (is_file($path)) {
    		$status = include_once($path);

    		$fileName = substr($path, (strrpos($path, DS) + 1));
    		$succeedImportFile[$fileName] = (boolean)$status;
    		
    		return $succeedImportFile[$fileName];
    	} else {
    		if ($testExist) {
    			throw new MrException('import not found file :' . $path);
    			echo "<br/>couldn't find the file which is imported !";
    		} else {
    			return array();
    		}
    	}
    }

    /**
     * set application.
     *
     * @param string $key key.
     * @param string $val key value.
     * @return void
     */
    static public function setA($key, $val)
    {
        $classkey = strtolower($key);
        self::$_a[$classkey] = $val;
    }

	/**
     * get application.
     *
     * @param string $key application key.
     * @return mixed
     */
    static public function getA($key)
    {
        $akey = strtolower($key);
        return isset(self::$_a[$key]) ? self::$_a[$key] : null;
    }

}