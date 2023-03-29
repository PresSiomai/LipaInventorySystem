<?php
session_start();
// unset($_SESSION["userEmail"]);\
session_destroy();
header("location: index.php");
?>