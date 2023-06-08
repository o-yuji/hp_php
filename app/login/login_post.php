<?php
session_start();
require_once("../../libs/functions.php");
require_once("../../libs/users_DAO.php");

$portal_id = (string)filter_input(INPUT_POST,"portal_id");
$password = (string)filter_input(INPUT_POST,"password");

$pdo = new_PDO();
$UserDAO = new UserDAO($pdo);
$users = $UserDAO->get_list();

foreach ($users as $user):
    if($portal_id === $user['portal_id'] && ($password === $user['aeon_id'])):

        $_SESSION['name'] = $user['name'];
        $_SESSION['portal_id'] = $user['portal_id'];
        $_SESSION['authority'] = $user['authority'];
        $_SESSION['time'] = time();

        header('Location: ../index.php');
        exit();
    endif;
endforeach;

header('Location: ../login.php');