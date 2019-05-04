<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Db.php';
include_once '../../models/representation.php';

$database = new Db();
$db = $database->connect();

$representation = new Representation($db);

$representation->id = isset($_GET['id']) ? $_GET['id'] : die();

$representation->read_single();

$representation_arr = array(
	'id' => $representation->id,
	'name' => $representation->name,
	'short_desc' => $representation->short_desc,
	'address' => $representation->address,
	'description' => $representation->description,
	'address' => $representation->address,
	'phone' => $representation->phone,
	'mobile' => $representation->mobile,
	'email' => $representation->email,
	'website' => $representation->website,
	'photo_id' => $representation->photo_id,
	'logo_id' => $representation->logo_id,
	'logo_small_id' => $representation->logo_small_id,
	'title' => $representation->title,
	'doc_id' => $representation->doc_id
);

print_r(json_encode($representation_arr));