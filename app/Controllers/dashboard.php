<?php

class dashboard extends Controller {
    public function index() {
        $this->view('dashboard/index', ['title' => 'BusyApp :: Dashboard']);
    }
}
