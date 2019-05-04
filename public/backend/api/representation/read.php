<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Db.php';
include_once '../../models/representation.php';

$database = new Db();
$db = $database->connect();

$representation = new Representation($db);

$result = $representation->read();
$num = $result->rowCount();

if($num > 0) {
  $rep_arr = array();
  $rep_arr['data'] = array();
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $rep_item = array(
      'id' => $id,
      'name' => $name,
      'phone' => $phone,
			'description' => $description,
      'mobile' => $mobile,
      'email' => $email,
      'website' => $website,
      'city_id' => $city_id,
      'city_name' => $city_name,
			'photo_id' => $photo_id,
			'logo_id' => $logo_id,
			'logo_small_id' => $logo_small_id
    );
    array_push($rep_arr['data'], $rep_item);
  }
  echo json_encode($rep_arr);
} else {
  echo json_encode(
    array('message' => 'No Reps Found')
  );
}