<?php
session_start();
require_once("../../libs/functions.php");
require_once("../../libs/users_DAO.php");
sign_in_chk($_SESSION['name']);

try{
$pdo = new_PDO();
$userDAO = new UserDAO($pdo);
$users = $userDAO->get_list();


}catch(PDOException $e){
    echo $e->getMessage();
}

require("../../views/user/user_list_view.php");


?>