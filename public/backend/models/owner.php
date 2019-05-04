<?php
class Owner {
  private $conn;
  private $table = 'owner';

  public $id;
  public $name;
	public $address;
	public $phone;
	public $fax;
	public $mobile;
	public $email;
	public $viber;
	public $watsup;
	public $skype;
	public $facebook;
	public $gplus;
	public $linkedin;
	public $twiter;

  public function __construct($db) {
    $this->conn = $db;
  }

  public function read() {
    $query = 'SELECT *
              FROM ' . $this->table . '';

    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }
}