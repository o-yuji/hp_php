<?php
session_start();
require_once("../../libs/functions.php");
require_once("../../libs/task_DAO.php");
sign_in_chk($_SESSION['name']);
$name = $_SESSION['name'];

try{   
$pdo = new_PDO();
$task_DAO = new task_DAO($pdo);
$today_tasks = $task_DAO->task_today($name);
$every_tasks = $task_DAO->task_every($name);
$end_tasks = $task_DAO->task_end($name);

if(isset($_GET['action'])):

    $action = $_GET['action'];
    $id = filter_input(INPUT_POST,'id');
    $status = filter_input(INPUT_POST,'status');

    switch($action) {
        case "update" or "back":
            $task_DAO->task_update($action,$id,$status);
            break;
        case "del":
            $task_DAO->task_update($action,$id,$status);
            break;
    }

    if($action == "delete"):
        $task_DAO->task_delete($id);
    endif;
    
endif;

}catch(PDOException $e){
    echo $e->getMessage();
};


require("../../views/todo_list/todo_list_view.php");

?>