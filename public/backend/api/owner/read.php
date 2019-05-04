<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Db.php';
include_once '../../models/owner.php';

$database = new Db();
$db = $database->connect();

$owner = new Owner($db);

$result = $owner->read();
$num = $result->rowCount();

if($num > 0) {
  $owner_arr = array();
  $owner_arr['data'] = array();
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $owner_item = array(
			'id' => $id,
      'name' => $name,
			'address' => $address,
      'phone' => $phone,
			'fax' => $fax,
			'mobile' => $mobile,
			'email' => $email,
      'viber' => $viber,
			'watsup' => $watsup,
			'skype' => $skype,
			'facebook' => $facebook,
			'gplus' => $gplus,
			'twitter' => $twitter,
			'linkedin' => $linkedin
    );
    array_push($owner_arr['data'], $owner_item);
  }
  echo json_encode($owner_arr);
} else {
  echo json_encode(
    array('message' => 'No News Found')
  );
}