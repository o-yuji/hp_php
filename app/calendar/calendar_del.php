<?php
session_start();
require_once("../../libs/functions.php");
require_once("../../libs/calendar_DAO.php");
sign_in_chk($_SESSION['name']);

$id = $_POST['id'];

try{
    $pdo = new_PDO();
    $calendarPDO = new calendar_DAO($pdo);
    $calendarPDO->del_cal($id);

    header('Location: calendar.php');

}catch(PDOException $e){
    echo $e->getMessage();
}


?>