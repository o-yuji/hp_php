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
    $action = $_GET['action'];
    if ($action == "insert") :
        $name = $_SESSION['name'];
        $mail_to = (string)filter_input(INPUT_POST, "to");
        $mail_cc = (string)filter_input(INPUT_POST, "cc");
        $mail_bcc = (string)filter_input(INPUT_POST, "bcc");
        $title = (string)filter_input(INPUT_POST, "title");
        $content = (string)filter_input(INPUT_POST, "content");
        $memo = (string)filter_input(INPUT_POST, "memo");

        $pdo->beginTransaction();
        $template_id_no = $template_DAO->add_template($name, $mail_to, $mail_cc, $mail_bcc, $title, $content, $memo);

        //新規タグの処理
        if (isset($_POST['new_tag'])) :
            $new_tag = $_POST['new_tag'];
            $tag_id_no = $tags_DAO->tag_add($new_tag);
            $tags_DAO->template_tags_add($template_id_no, $tag_id_no);
        endif; //new_tag

        //既存タグの紐付け処理
        if (isset($_POST['tagbox'])) :
            $tag_box = $_POST['tagbox'];

            foreach ($tag_box as $tag_val) :

            endforeach;
        endif; //tagbox

        $pdo->commit();
        header('Location: template.php');
    endif; //insert


} catch (PDOException $e) {
    echo ($e->getMessage());
    error_log($e->getMessage());

    // header("Location: ../error.php");
    exit();
}



require("../../views/template/template_add_view.php");