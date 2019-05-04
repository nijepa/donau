<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Db.php';
include_once '../../models/reps_det.php';

$database = new Db();
$db = $database->connect();

$reps_det = new RepsDet($db);

$reps_det->id = isset($_GET['id']) ? $_GET['id'] : die();
$result = $reps_det->read_single();
$num = $result->rowCount();

if($num > 0) {
  $rep_arr = array();
  $rep_arr['data'] = array();
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $rep_item = array(
      'id' => $id,
      'title' => $title,
      'doc_id' => $doc_id,
			'rep_id' => $rep_id
    );
    array_push($rep_arr['data'], $rep_item);
  }
  echo json_encode($rep_arr);
} else {
  echo json_encode(
    array('message' => 'No Reps Found')
  );
}