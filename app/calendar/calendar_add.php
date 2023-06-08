<?php
session_start();
require_once("../../libs/functions.php");
require_once("../../libs/calendar_DAO.php");
sign_in_chk($_SESSION['name']);

// $start_day,$end_day,$name,$title,$content

if(isset($_POST['start_day'])):
    $title = filter_input(INPUT_POST,'title');
    $start_day = filter_input(INPUT_POST,'start_day');
    $end_day = filter_input(INPUT_POST,'end_day');
    $name = $_SESSION['name'];
    $content = stripslashes(filter_input(INPUT_POST,'content'));

    try{
    $pdo = new_PDO();
    $calendar_DAO = new calendar_DAO($pdo);
    $calendar_DAO->add_calendar($title,$start_day,$end_day,$name,$content);

    header('Location: calendar.php');

    }catch(PDOException $e){
        echo $e->getMessage();
    }
endif;

require("../../views/calendar/calendar_add_view.php");