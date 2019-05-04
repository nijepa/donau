<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Db.php';
include_once '../../models/product.php';

$database = new Db();
$db = $database->connect();

$product = new Product($db);

$result = $product->read();
$num = $result->rowCount();

if($num > 0) {
  $prod_arr = array();
  $prod_arr['data'] = array();
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $prod_item = array(
      'id' => $id,
      'name' => $name,
			'description' => $description,
			'photo_id' => $photo_id
    );
    array_push($prod_arr['data'], $prod_item);
  }
  echo json_encode($prod_arr);
} else {
  echo json_encode(
    array('message' => 'No Prods Found')
  );
}