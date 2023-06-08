<?php
session_start();
require_once("../libs/functions.php");
require_once("../libs/users_DAO.php");
require_once("../libs/menu_DAO.php");
require_once("../libs/content_DAO.php");
sign_in_chk($_SESSION['name']);
$id = $_GET['id'];

try{
$pdo = new_PDO();

$menuDAO = new menu_DAO($pdo);
$menu01s = $menuDAO->menu01_view($pdo);
$menu02s = $menuDAO->menu02_view($pdo);
$menu03s = $menuDAO->menu03_view($pdo);
$menu_list = array_merge($menu01s, $menu02s, $menu03s);

$contentDAO = new content_DAO($pdo);
$content = $contentDAO->search_content($id);

}catch(PDOException $e){
    echo $e->getMessage();
}

require("../views/content_edit_view.php");