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
    $id = $_GET['id'];
    $detail = $template_DAO->get_template($id);
    $my_tags = $tags_DAO->get_mytag($id);
    $col = array_column($my_tags, "name");
    //
} catch (PDOException $e) {
    error_log($e->getMessage());
    header("Location: ../error.php");
    exit();
}

require("../../views/template/template_edit_view.php");