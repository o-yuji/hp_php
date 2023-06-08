<?php
session_start();
require_once("../libs/functions.php");
require_once("../libs/users_DAO.php");
require_once("../libs/menu_DAO.php");
require_once("../libs/content_DAO.php");
sign_in_chk($_SESSION['name']);



try{
    $pdo = new_PDO();
    $content_DAO = new content_DAO($pdo);
    $content_cnt = $content_DAO->get_content_count();

    if(isset($_GET['category'])):
        $category = $_GET['category'];
        $contents =$content_DAO->select_content($category);
    else:
        $contents =$content_DAO->all_content();
    endif;

}catch(PDOException $e){
    echo($e->getMessage());
    header("Location: error.php");
    exit();
}


require("../views/content_list_view.php");