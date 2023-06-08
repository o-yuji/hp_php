<?php

session_start();
require_once("../../libs/functions.php");
require_once("../../libs/content_DAO.php");

$name = $_SESSION['name'];
$category = $_POST['category'];
$title = $_POST['title'];
$id = $_POST['id'];
$content = stripslashes($_POST['content']);


try{
    $pdo = new_PDO();
    $content_DAO = new content_DAO($pdo);
    $content_DAO->update_content($category,$title,$name,$content,$id);

    header('Location: ../content_list.php');

}catch(PDOException $e){
    echo ($e->getMessage());
    header('Location: ../error.php');
}

?>