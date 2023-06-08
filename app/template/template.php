<?php
session_start();
require_once("../../libs/functions.php");
require_once("../../libs/tags_DAO.php");
require_once("../../libs/template_DAO.php");
sign_in_chk($_SESSION['name']);


try {
    $pdo = new_PDO();
    $tags_DAO = new tags_DAO($pdo);
    $tags = $tags_DAO->tag_list();

    $template_DAO = new template_DAO($pdo);
    $template_lists = $template_DAO->template_lists();
} catch (PDOException $e) {
    error_Log($e->getMessage());
    header("Location: error.php");
    exit();
}

require("../../views/template/template_view.php");