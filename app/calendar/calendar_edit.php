<?php
session_start();
require_once("../../libs/functions.php");
require_once("../../libs/calendar_DAO.php");
sign_in_chk($_SESSION['name']);

// $start_day,$end_day,$name,$title,$content
if(isset($_GET['id'])):
    // $id = $_GET['id'];
    $id = filter_input(INPUT_GET,'id');

try{
    $pdo = new_PDO();
    $calendar_DAO = new calendar_DAO($pdo);

    $datas = $calendar_DAO->search_one($id);

}catch(PDOException $e){
    echo $e->getMessage();
    exit();
} 


endif;

if(isset($_POST['start_day'])):
    $title = $_POST['title'];
    $start_day = $_POST['start_day'];
    $end_day = $_POST['end_day'];
    $name = $_SESSION['name'];
    $content = stripslashes($_POST['content']);

    try{
    $pdo = new_PDO();
    $calendar_DAO = new calendar_DAO($pdo);
    $calendar_DAO->edit_calendar($title,$start_day,$end_day,$name,$content,$id);

    header('Location: calendar.php');

    }catch(PDOException $e){
        echo $e->getMessage();
    }
endif;

require("../../views/calendar/calendar_edit_view.php");