<?php

require_once("../../libs/functions.php");
require_once("../../libs/history_DAO.php");

$id = (string)filter_input(INPUT_POST,"id");
if(filter_var($id,FILTER_VALIDATE_INT)=== false):
    error_log("validate: id is not int");
    header("Location: ../error.php");
    exit();
endif;

try{
$pdo = new_PDO();
$history_dao = new history_DAO($pdo);
$history_dao->delete_history($id);

header("Location: ../index.php");

}catch(PDOException $e){
    error_log($e->getMessage());
    header("Location: ../error.php");
    exit();
}