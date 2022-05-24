<?php
session_name("login");
session_start();
unset($_SESSION["login"]);
session_destroy();
header("location:formlogin.php");
exit;
?>