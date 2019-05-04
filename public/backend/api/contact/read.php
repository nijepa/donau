<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Db.php';
include_once '../../models/contact.php';

$database = new Db();
$db = $database->connect();

$contact = new Contact($db);

$result = $contact->read();
$num = $result->rowCount();

if($num > 0) {
  $contact_arr = array();
  $contact_arr['data'] = array();
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $contact_item = array(
			'id' => $id,
      'title' => $title,
      'name' => $name,
			'email' => $email,
      'phone' => $phone,
      'facebook' => $facebook,
      'twitter' => $twitter,
      'viber' => $viber,
			'whatsapp' => $whatsapp,
      'skype' => $skype
    );
    array_push($contact_arr['data'], $contact_item);
  }
  echo json_encode($contact_arr);
} else {
  echo json_encode(
    array('message' => 'No contact Found')
  );
}