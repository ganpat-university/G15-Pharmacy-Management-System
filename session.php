<?php
session_start();

$file = $_SERVER["SCRIPT_NAME"];

if ($file == "/g15-pharmacy-management-system/login.php" || $file == "/g15-pharmacy-management-system/signup.php") {
    if (!empty($_SESSION['pharmacyid'])) {
        header("Location:home.php");
    }
} else {
    if (!isset($_SESSION['id'])) {
        header("Location:login.php");
    }
}
?>
