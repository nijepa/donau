<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Request-With');

include_once '../../config/Db.php';
include_once '../../models/representation.php';

$database = new Db();
$db = $database->connect();

$representation = new Representation($db);

$data = json_decode(file_get_contents("php://input"));

$representation->id = $data->id;

$representation->name = $data->name;
$representation->name = $data->name;
$representation->name = $data->name;
$representation->name = $data->name;
$representation->name = $data->name;
$representation->name = $data->name;
$representation->name = $data->name;

if($representation->create) {
	echo json_encode(
		array('message' => 'Rep Updated')
	);
} else {
	echo json_encode(
		array('message' => 'Rep Not Updated')
	);
}