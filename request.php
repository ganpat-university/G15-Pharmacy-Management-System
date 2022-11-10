<?php
include 'db/db.php';
include 'function/function.php';
$id = $_POST['id'];
$action = $_POST['action'];
if ($action == 'accept') {    
    update("purchase", "id = '$id'", array("Accepted"), array("status"));
} elseif ($action == 'reject') {
    update("purchase", "id = '$id'", array("Rejected"), array("status"));
}
?>