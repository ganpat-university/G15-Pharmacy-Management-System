<?php
#close all connection
session_start();
session_destroy();
header("location:login.php");
?>