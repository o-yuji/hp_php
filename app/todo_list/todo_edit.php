<?php
session_start();
require_once("../../libs/functions.php");
require_once("../../libs/task_DAO.php");
sign_in_chk($_SESSION['name']);


if(isset($_GET['id'])):
    try{   
    $id = (int)filter_input(INPUT_GET,'id');
    $pdo = new_PDO();
    $task_DAO = new task_DAO($pdo);
    $val = $task_DAO->get_task_no($id);

    // var_dump($val);

    }catch(PDOException $e){
        echo $e->getMessage();
    };
endif;

if(isset($_GET['action']) == "edit"):
    try{   
    $id = (int)filter_input(INPUT_POST,'id');
    $category = $_POST['category'];
    $title = filter_input(INPUT_POST,'title');
    $status = filter_input(INPUT_POST,'status');
    $hidden = filter_input(INPUT_POST,'hidden');
    $content = stripslashes($_POST['content']);
    $pdo = new_PDO();
    $task_DAO = new task_DAO($pdo);
    $val = $task_DAO->task_edit($id,$category,$title,$status,$hidden,$content);

    header('Location: todo_list.php');

    }catch(PDOException $e){
        echo $e->getMessage();
    };
endif;


require("../../views/todo_list/todo_edit_view.php");

?>