<?php

session_start();
require_once("../../libs/functions.php");
require_once("../../libs/content_DAO.php");

$name = $_SESSION['name'];
$id = $_POST['id'];


try{
    $pdo = new_PDO();

    $content_DAO = new content_DAO($pdo);
    $content_DAO->delete_content($id);

    header('Location: ../index.php');

}catch(PDOException $e){
    error_log($e->getMessage());
    header('Location: ../error.php');
}