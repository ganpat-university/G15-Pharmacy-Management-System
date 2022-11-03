<?php
include 'function/function.php';
include 'db/db.php';

$medicineId = get("medicineId");
$medicineName = get("medicineName");
$genName= get("genName");
$details = get("details");
$price = get("price");
$category = get("category");
$medicineType = get("medicineType");
$status = get("status");
$strength = get("strength");
print_r($_FILES);
if (!empty($_FILES["img"]["name"])) {
    $fileName = basename($_FILES["img"]["name"]);
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
    $img = $_FILES['img']['tmp_name'];
    $imgContent = addslashes(file_get_contents($img));
}
print_r(base64_encode($imgContent));
echo $medicineId . " \n" . $medicineName . "\n " . $genName . " \n" . $details . " \n". $price . "\n" . $category . "\n" . $medicineType . "\n" . $status;
update("product", "id = 2", array($imgContent), array("medicineImage"));
$sql = "select * from product where id = 2";
$result = sql($sql);

?>