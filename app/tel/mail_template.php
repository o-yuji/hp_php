<?php
session_start();
require_once("../../libs/functions.php");
sign_in_chk($_SESSION['name']);



require("../../views/tel/mail_template_view.php");

?>