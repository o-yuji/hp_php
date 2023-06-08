<?php
session_start();
require_once("../libs/functions.php");
sign_in_chk($_SESSION['name']);


require("../views/id_pw_list_view.php");

?>