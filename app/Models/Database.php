<?php

class Database {

    private static $_instance;
    private $_pdo;

    private function __construct() {
        try {
            $this->_pdo = new PDO('mysql:host=127.0.0.1;dbname=busy;charset=utf8', 'root', '');
        }

        catch(PDOException $e) {
            echo $e->getMessage();
        }

        return $this->_pdo;
    }

    public function getInstance() {
        if (self::$_instance === null) {
            self::$_instance = new Database();
        }

        return self::$_instance;
    }

    public function __clone() {
        return false;
    }

    public function __wakeup() {
        return false;
    }

    public function select($table, $id = null) {
        if($id) {
          $result = $this->_pdo->prepare('SELECT * FROM ' . $table . ' WHERE name = ?');
          $result->execute([$id]);
        } else {
          $result = $this->_pdo->prepare('SELECT * FROM ' . $table);
          $result->execute();
        }

        if($result->rowCount()) {
          $final = [];
          while($row = $result->fetchObject()) {
            array_push($final, $row);
          }
          return $final;
        }
    }
}
