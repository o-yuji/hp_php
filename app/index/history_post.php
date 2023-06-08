<?php

require_once("../../libs/functions.php");
require_once("../../libs/history_DAO.php");

$name = (string)filter_input(INPUT_POST,"name");
$info = (string)filter_input(INPUT_POST,"info");

if($name === ""):
    error_log("name is required");
    header("Location: ../error.php");
    exit();
endif;

$pdo = new_PDO();
$history_DAO = new history_DAO($pdo);
$history_DAO->insert_history($name,$info);


header("Location: ../index.php");