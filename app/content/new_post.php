<?php

session_start();
require_once("../../libs/functions.php");
require_once("../../libs/content_DAO.php");

$name = $_SESSION['name'];
$title = $_POST['title'];
$category = $_POST['category'];
$content = stripslashes($_POST['content']);


try{
    $pdo = new_PDO();

    $content_DAO = new content_DAO($pdo);
    $content_DAO->add_content($category,$title,$name,$content);

    header('Location: ../content_list.php');

}catch(PDOException $e){
    error_log($e->getMessage());
    header('Location: ../error.php');
}



?>