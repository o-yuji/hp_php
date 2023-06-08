<?php
session_start();
require_once("../libs/functions.php");
require_once("../libs/users_DAO.php");
require_once("../libs/history_DAO.php");
sign_in_chk($_SESSION['name']);

try{
$pdo = new_PDO();
// $userDAO = new UserDAO($pdo);
// $users = $userDAO->get_list();

$historyDAO = new history_DAO($pdo);
$historyies = $historyDAO->get_history($pdo);//履歴の配列
$history_cnt = $historyDAO->get_count($pdo);//履歴の全件数
define('MAX','6'); //1ページの表示件数
$max_page = ceil($history_cnt / MAX);//全ページ数

if(!isset($_GET['page_id'])){ // $_GET['page_id'] はURLに渡された現在のページ数
    $now = 1; // 設定されてない場合は1ページ目にする
}else{
    $now = $_GET['page_id'];
}

$start_no = ($now - 1) * MAX; // 配列の何番目から取得すればよいか

// array_sliceは、配列の何番目($start_no)から何番目(MAX)まで切り取る関数
$disp_data = array_slice($historyies, $start_no, MAX, true);

require("../views/index_view.php");

}catch(PDOException $e){
    error_log($e->getMessage());
    header("Location: error.php");
    exit();
}