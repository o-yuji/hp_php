<?php
session_start();
require_once("../../libs/functions.php");
require_once("../../libs/calendar_DAO.php");
sign_in_chk($_SESSION['name']);

//今日の日付を取得
$today = new DateTime('now');

// 1日の曜日を取得
$ym_now = date("Ym");
$yesterday = date('Y-m-d', strtotime('-1 day')); ;

$prev = $_REQUEST['prev'];
if ($prev == ''){
  $prev = 0;
}

$next = $_REQUEST['next'];
if ($next == ''){
  $next = 0;
}

$target_date = date("Ym");

if(!empty($_REQUEST['prev'])) {
	$ym_now = date('Ym', strtotime($target_date." $prev month")) ;
}
if(!empty($_REQUEST['next'])) {
	$ym_now = date('Ym', strtotime($target_date." $next month")) ;
}
$y = substr($ym_now, 0, 4);
$m = substr($ym_now, 4, 2);
$wd1 = date("w", mktime(0, 0, 0, $m, 1, $y)); //1日までの空白
$d = 1;

try{
  $pdo = new_PDO();
  $calendar_DAO = new calendar_DAO($pdo);
}catch(PDOException $e){
  echo $e->getMessage();
}

require("../../views/calendar/calendar_view.php");

?>