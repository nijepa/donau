<?php

class Db {
    // Properties
    private $dbhost = 'localhost';
    private $dbuser = 'root';
    private $dbpass = '';
    private $dbname = 'donau_trade_db';
		private $dbcharset = 'utf8';
    private $conn;
    // Connect
    public function connect(){
      $this->conn = null;

      try {
        $this->conn = new PDO('mysql:host=' . $this->dbhost . ';dbname=' . $this->dbname . ';charset=' . $this->dbcharset, $this->dbuser, $this->dbpass);
				//$this->conn = new PDO('mysql:host=' . $this->dbhost . ';dbname=' . $this->dbname, $this->dbuser, $this->dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8 COLLATE utf8_unicode_ci") );
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'Connection error: ' . $e->getMessage();
      }

      return $this->conn;
    }
}