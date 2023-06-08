<?php
session_start();
require_once("../../libs/functions.php");
require_once("../../libs/calendar_DAO.php");
sign_in_chk($_SESSION['name']);

$start_day = $_GET['day'];

try{
$pdo = new_PDO();
$calendar_DAO = new calendar_DAO($pdo);
$contents = $calendar_DAO->search_calendar($start_day,$_SESSION['name']);

}catch(PDOException $e){
    echo $e->getMessage();
}

require("../../views/calendar/calendar_list_view.php");