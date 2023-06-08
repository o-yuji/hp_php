<?php

define('WEB_ROOT', 'http://192.168.16.26:81/hp/');

function new_PDO()
{
    try {
        $dsn = "mysql: host=127.0.0.1;dbname=help_db;charset=utf8";
        $user = "admin";
        $pass = "password";
        $options = array(
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        );
        $pdo = new PDO($dsn, $user, $pass, $options);
        return $pdo;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

function csrf()
{
    $csrf_t =  bin2hex(random_bytes(32));
    $_SESSION["token"] = $csrf_t;
}

function sign_in_chk($user)
{
    if ($user == "") :
        header('Location: login.php');
    endif;
}

//phpのバージョンが古い! array_columnが使用出来ない為、自作
function array_column($target_data, $column_key, $index_key = null)
{
    if (is_array($target_data) === FALSE || count($target_data) === 0) return FALSE;

    $result = array();
    foreach ($target_data as $array) {
        if (array_key_exists($column_key, $array) === FALSE) continue;
        if (is_null($index_key) === FALSE && array_key_exists($index_key, $array) === TRUE) {
            $result[$array[$index_key]] = $array[$column_key];
            continue;
        }
        $result[] = $array[$column_key];
    }
    if (count($result) === 0) return FALSE;
    return $result;
}