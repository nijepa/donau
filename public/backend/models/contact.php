<?php
class Contact {
  private $conn;
  private $table = 'contacts';

  public $id;
  public $title;
	public $name;
	public $email;
  public $phone;
  public $viber;
	public $skype;
	public $facebook;
  public $twitter;
  public $whatsapp;

  public function __construct($db) {
    $this->conn = $db;
  }

  public function read() {
    $query = 'SELECT * FROM ' . $this->table . ' ORDER BY title ASC';
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }
}