<?php

class Controller {
    protected function model($model) {
        require_once MODELS . $model. '.php';
        return new $model();
    }

    protected function view($view, $data) {
        if(file_exists(VIEWS . $view . '.php')) {
            if($data) {
              foreach($data as $key => $value) {
                ${$key}=$value;
              }
            }
            require_once VIEWS . '/_templates/header.php';
            require_once VIEWS . $view . '.php';
        }
    }
}
