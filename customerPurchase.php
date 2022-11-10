<?php 
include 'function/function.php';
include 'db/db.php';

$medName = get('med');
$sql = "SELECT * from product where medicineName='$medName'";
$result1 = sql($sql);
$unitCost = $result1[0]['unitCost'];
echo $unitCost;
?>