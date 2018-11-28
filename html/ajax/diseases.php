<?php
require_once('../includes/database/mysql/config.php');
require_once('../includes/database.class.php');
// header('Content-Type: application/json');

if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['REQUEST_METHOD'] != 'POST' &&
  strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest')
  die(json_encode(array('error', true)));

$database_link = DBM::open($config['database']);

$query = "SELECT id, title
          FROM `bc_disease`
          WHERE
              (`title` LIKE '{$_POST['query']}%' OR `title` LIKE '% {$_POST['query']}%')
              AND language = '{$_GET['lang']}'";


if($reqsult = DBM::queryData($query, $database_link)) {
  while($row = DBM::fetchObject($reqsult)) {
    $arr[] = $row;
  }
}

echo json_encode($arr);

?>
