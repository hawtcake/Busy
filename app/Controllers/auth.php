<?php

class auth extends Controller {
    public $param = [];

    public function index() {
        $user = $this->model('User');
        $this->view('auth/index', ['title' => 'BusyApp :: Auth']);
    }
}
