<?php

class User extends Database {
    protected $_table = 'user';

    public function __construct() {
        $db = $this->getInstance();
        #var_dump($db->select());
    }

}
