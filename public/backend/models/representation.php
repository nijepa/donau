<?php
class Representation {
  private $conn;
  private $table = 'representations';

  public $id;
  public $name;
	public $description;
	public $city_id;
	public $city_name;
  public $address;
  public $phone;
  public $mobile;
  public $email;
  public $website;
	public $photo_id;
	public $logo_id;
	public $logo_small_id;

  public function __construct($db) {
    $this->conn = $db;
  }

  public function read() {
    $query = 'SELECT 
              	c.name AS city_name,
              	r.id,
              	r.city_id,
								r.name,
								r.description,
								r.address,
								r.phone,
								r.mobile,
								r.email,
								r.website,
								r.photo_id,
								r.logo_id,
								r.logo_small_id
              FROM 
        	      ' . $this->table . ' r 
              LEFT JOIN
  	            cities c ON r.city_id = c.id
              ORDER BY
     	         r.name ASC';
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }
	
	public function read_single() {
		$query = 'SELECT 
								c.title,
								c.doc_id,
								r.id,
								r.city_id,
								r.name,
								r.short_desc,
								r.description,
								r.address,
								r.phone,
								r.mobile,
								r.email,
								r.website,
								r.photo_id,
								r.logo_id,
								r.logo_small_id
              FROM 
	              ' . $this->table . ' r 
              LEFT JOIN
 	             reps_det c ON r.id = c.rep_id
              WHERE
	              r.id = ?
							LIMIT 0,1';
    $stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id);
    $stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$this->name = $row['name'];
		$this->title = $row['title'];
		$this->short_desc = $row['short_desc'];
		$this->description = $row['description'];
		$this->address = $row['address'];
		$this->phone = $row['phone'];
		$this->mobile = $row['mobile'];
		$this->email = $row['email'];
		$this->website = $row['website'];
		$this->photo_id = $row['photo_id'];
		$this->logo_id = $row['logo_id'];
		$this->logo_small_id = $row['logo_small_id'];
		$this->doc_id = $row['doc_id'];
		
    return $stmt;
	}
	
	public function create() {
		$query = 'INSERT INTO ' . $this->table . '
						 SET
						 	 name = :name,
							 city_id = :city_id,
							 description = :description,
							 address = :address,
							 phone = :phone,
							 mobile = :mobile,
							 email = :email,
							 website = :website,
							 photo_id = :photo_id,
							 logo_id = :logo_id,
							 logo_small_id = :logo_small_id';
		
		$stmt = $this->conn->prepare($query);
		
		$this->name = htmlspecialchars(strip_tags($this->name));
		$this->city_id = htmlspecialchars(strip_tags($this->city_id));
		$this->description = htmlspecialchars(strip_tags($this->description));
		$this->address = htmlspecialchars(strip_tags($this->address));
		$this->phone = htmlspecialchars(strip_tags($this->phone));
		$this->mobile = htmlspecialchars(strip_tags($this->mobile));
		$this->email = htmlspecialchars(strip_tags($this->email));
		$this->website = htmlspecialchars(strip_tags($this->website));
		$this->photo_id = htmlspecialchars(strip_tags($this->photo_id));
		$this->logo_id = htmlspecialchars(strip_tags($this->logo_id));
		$this->logo_small_id = htmlspecialchars(strip_tags($this->logo_small_id));
		
		$stmt->bindParam(':name', $this->name);
		$stmt->bindParam(':city_id', $this->city_id);
		$stmt->bindParam(':description', $this->description);
		$stmt->bindParam(':address', $this->address);
		$stmt->bindParam(':phone', $this->phone);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':mobile', $this->mobile);
		$stmt->bindParam(':website', $this->website);
		$stmt->bindParam(':photo_id', $this->photo_id);
		$stmt->bindParam(':logo_id', $this->logo_id);
		$stmt->bindParam(':logo_small_id', $this->logo_small_id);
		
		if($stmt->execute()) {
			return true;
		}
		printf("Error: %s.\n", $stmt->error);
		return false;
		
	}
	
	public function update() {
		$query = 'UPDATE ' . 
							$this->table . '
						 SET
						 	 name = :name,
							 city_id = :city_id,
							 description = :description,
							 address = :address,
							 phone = :phone,
							 mobile = :mobile,
							 email = :email,
							 website = :website,
							 photo_id = :photo_id,
							 logo_id = :logo_id,
							 logo_small_id = :logo_small_id
						WHERE 
							id = :id';
		
		$stmt = $this->conn->prepare($query);
		
		$this->id = htmlspecialchars(strip_tags($this->id));
		$this->name = htmlspecialchars(strip_tags($this->name));
		$this->city_id = htmlspecialchars(strip_tags($this->city_id));
		$this->description = htmlspecialchars(strip_tags($this->description));
		$this->address = htmlspecialchars(strip_tags($this->address));
		$this->phone = htmlspecialchars(strip_tags($this->phone));
		$this->mobile = htmlspecialchars(strip_tags($this->mobile));
		$this->email = htmlspecialchars(strip_tags($this->email));
		$this->website = htmlspecialchars(strip_tags($this->website));
		$this->photo_id = htmlspecialchars(strip_tags($this->photo_id));
		$this->logo_id = htmlspecialchars(strip_tags($this->logo_id));
		$this->logo_small_id = htmlspecialchars(strip_tags($this->logo_small_id));
		
		$stmt->bindParam(':id', $this->id);
		$stmt->bindParam(':name', $this->name);
		$stmt->bindParam(':city_id', $this->city_id);
		$stmt->bindParam(':description', $this->description);
		$stmt->bindParam(':address', $this->address);
		$stmt->bindParam(':phone', $this->phone);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':mobile', $this->mobile);
		$stmt->bindParam(':website', $this->website);
		$stmt->bindParam(':photo_id', $this->photo_id);
		$stmt->bindParam(':logo_id', $this->logo_id);
		$stmt->bindParam(':logo_small_id', $this->logo_small_id);
		
		if($stmt->execute()) {
			return true;
		}
		printf("Error: %s.\n", $stmt->error);
		return false;
		
	}
}