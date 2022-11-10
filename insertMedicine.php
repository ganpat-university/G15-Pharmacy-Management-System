<?php
include 'function/function.php';
include 'db/db.php';
session_start();
$managerId = $_SESSION['pharmacyid'];
$medicineId = -1;
$medicineName = '-';
if (isset($_POST['medicineId'])) {
    $medicineId = get('medicineId');
    $sql = "SELECT * FROM product WHERE id = $medicineId";
} 
if (isset($_POST['medicineName'])) {
    $medicineName = get('medicineName');
    $sql = "SELECT * FROM product WHERE medicineName = '$medicineName'";
}
$result = sql($sql);
$str = "";
    if(count($result) == 0){
        echo "Medicine not found";
        
    } else {
        $str = $result[0]['medicineName'].",". $result[0]['genericName'].",". $result[0]['category'].",". $result[0]['strength'].",". $result[0]['unitCost'].",". base64_encode($result[0]['medicineImage']).",". $result[0]['status'].",".$result[0]['id'].",".$result[0]['details'].",".$result[0]['medicineType'];
    }
    echo $str;
?>