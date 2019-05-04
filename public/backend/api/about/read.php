<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Db.php';
include_once '../../models/about.php';

$database = new Db();
$db = $database->connect();

$about = new About($db);

$result = $about->read();
$num = $result->rowCount();

if($num > 0) {
  $about_arr = array();
  $about_arr['data'] = array();
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $about_item = array(
			'id' => $ida,
      'title' => $title,
      'body' => $body,
			'caption' => $caption,
			'description' => $description
    );
    array_push($about_arr['data'], $about_item);
  }

//	$array = array_map('encode_all_strings',$about_arr);
//
//	function encode_all_strings($arr) {
//    foreach($arr as $key => $value) {
//        $arr[$key] = utf8_encode($value);
//    }
//    return $arr;
//	}
	
//encode

//echo $arr;


  echo json_encode($about_arr);
} else {
  echo json_encode(
    array('message' => 'No Reps Found')
  );
}