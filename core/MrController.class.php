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
    // model list
	static private $_model = array();


	/** 
	 * get model.
	 * 
	 * @param string $modelName model name.
	 * @return mixed
	 */
	public function model($modelName)
	{
		$model = explode("/", $modelName);

		$filterModel = preg_grep("/^[a-zA-Z]/", $model);

		// if don't have model
		if (count($filterModel) == 0) {
			echo "couldn't find the model that you requested, please check your model uri !";
			return false;
		}

		// get the model that can be used
		$modelPath = "";
		foreach ($filterModel as $key => $value) {
			$modelPath .= DS . $value;
			$fileName = MAIN_PATH . "model" . $modelPath . ".php";

			if (file_exists($fileName)) {
                include_once($fileName);

                $modelKey = ucfirst($value);
                if (class_exists($modelKey)) {

					if (!$this->getModel($modelKey)) {
			            $this->setModel($modelKey, new $modelKey);
			        }

			        return $this->getModel($modelKey);
                }                
			} else {
				continue;
			}
		}

		echo "couldn't find the model that you requested, please check your model uri !";
		return false;

	}

	/**
     * redirect uri.
     *
     * @param string $route route uri.
     * @param int $http_response_code http reponse code.
     * @return void
     */
    public function redirect($route, $http_response_code = 302)
    {
    	$uri = BASE_URI . "index.php/" . $route;
        header("Location: " . $uri, TRUE, $http_response_code);

    }

    /**
     * set model.
     *
     * @param string $key key.
     * @param object $val key value.
     * @return void
     */
    public function setModel($key, $val)
    {
        $modelKey = strtolower($key);
        self::$_model[$modelKey] = $val;

    }

	/**
     * get model.
     *
     * @param string $key model key.
     * @return mixed
     */
    public function getModel($key)
    {
        $modelKey = strtolower($key);
        return isset(self::$_model[$modelKey]) ? self::$_model[$modelKey] : null;

    }

}
