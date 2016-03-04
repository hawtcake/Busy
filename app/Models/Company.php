<?php

class Company extends Database {
    protected   $_db,
                $_table = 'companies';

    public function __construct() {
        $this->_db = $this->getInstance();
    }

    public function getCompanies() {
        return $this->_db->select($this->_table);
    }

    public function getCompany($id) {
        return $this->_db->select($this->_table, $id);
    }

}
