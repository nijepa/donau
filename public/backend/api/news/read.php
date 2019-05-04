<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Db.php';
include_once '../../models/news.php';

$database = new Db();
$db = $database->connect();

$news = new News($db);

$result = $news->read();
$num = $result->rowCount();

if($num > 0) {
  $news_arr = array();
  $news_arr['data'] = array();
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $news_item = array(
			'id' => $ida,
      'title' => $title,
			'news_date' => $news_date,
      'body' => $body,
			'photo_id' => $photo_id,
			'description' => $description
    );
    array_push($news_arr['data'], $news_item);
  }
  echo json_encode($news_arr);
} else {
  echo json_encode(
    array('message' => 'No News Found')
  );
}