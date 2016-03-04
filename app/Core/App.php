<?php

class App {

    protected $controller = 'dashboard',
              $action     = 'index',
              $params     = [];

    public function __construct() {
        $url = $this->getURL();
        if(file_exists(CONTROLLERS . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once CONTROLLERS . $this->controller . '.php';

        $this->controller = new $this->controller();

        if(isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {
                $this->action = $url[1];
                unset($url[1]);
            } 
        }

        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    public function getURL() {
        $url = trim($_SERVER["REQUEST_URI"], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
    }

}
