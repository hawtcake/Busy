<?php
/**
* BusyApp Pro
*/

/**
* Autoloader
*/
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);

define('CONTROLLERS', APP . 'Controllers' . DIRECTORY_SEPARATOR);
define('MODELS', APP . 'Models' . DIRECTORY_SEPARATOR);
define('VIEWS', APP . 'Views' . DIRECTORY_SEPARATOR);
$url = trim($_SERVER["REQUEST_URI"], '/');
$url = filter_var($url, FILTER_SANITIZE_URL);
$url = explode('/', $url);
define('URL', $url[0]);
if(!empty($url[1])) { define('ACTION', $url[1]); }

function __autoload($class_name) {
    if(file_exists(APP . 'Core/' . $class_name . '.php')) {
        require_once(APP . 'Core/' . $class_name . '.php');
    }
    elseif(file_exists(MODELS . $class_name . '.php')) {
        require_once(MODELS . $class_name . '.php');
    } else {
        throw new Exception("Unable to load $class_name.");
    }
}
$app = new App();
