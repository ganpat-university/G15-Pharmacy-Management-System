<?php 
include 'function/function.php';
include 'db/db.php';

$medName = get('med');
$sql = "SELECT * from product where medicineName='$medName'";
$result1 = sql($sql);
$supplierCost = $result1[0]['supplierCost'];
echo $supplierCost;
?>