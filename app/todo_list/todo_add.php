<?php
session_start();
require_once("../../libs/functions.php");
require_once("../../libs/task_DAO.php");
sign_in_chk($_SESSION['name']);


if(isset($_POST['category'])):
    try{   
    $category = filter_input(INPUT_POST,'category');
    $title = filter_input(INPUT_POST,'title');
    $name = $_SESSION['name'];
    $status = filter_input(INPUT_POST,'status');
    $content = stripslashes(filter_input(INPUT_POST,'content'));

    $pdo = new_PDO();
    $task_DAO = new task_DAO($pdo);
    $task_DAO->task_add($category,$name,$title,$status,$content);

    }catch(PDOException $e){
        echo $e->getMessage();
    };
endif;

require("../../views/todo_list/todo_add_view.php");

?>