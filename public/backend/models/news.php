<?php
class News {
  private $conn;
  private $table = 'news_det';

  public $id;
  public $title;
	public $news_date;
	public $body;
	public $photo_id;
	public $description;

  public function __construct($db) {
    $this->conn = $db;
  }

  public function read() {
    $query = 'SELECT 
								r.id as ida,
              	c.title,
								c.news_date,
								c.body,
								r.photo_id,
								r.description
              FROM 
        	      ' . $this->table . ' r 
              LEFT JOIN
  	            news c ON r.news_id = c.id
              ORDER BY
     	          c.news_date DESC';
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }
}