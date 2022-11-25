<?php
include 'db/db.php';
include 'function/function.php';
$id = $_POST['id'];
$action = $_POST['action'];
$name = $_POST['name'];
if ($action == 'accept') {    
    update("purchase", "id = '$id'", array("Accepted"), array("status"));
    $sql = "SELECT * FROM purchase WHERE id = '$id'";
    $row = sql($sql);
    $managerId = $row[0]['managerId'];
    $invoiceNo = $row[0]['invoiceNo'];
    $medicineName = $row[0]['medicineName'];
    $requestDate = $row[0]['requestDate'];
    $Qty = $row[0]['Qty'];
    $totalAmount = $row[0]['totalAmount'];
    $details = $row[0]['details'];
    $paymentType = $row[0]['paymentType'];
    $bankName = $row[0]['bankName'];
    $category = $row[0]['category'];
    $date = date('Y-m-d');
    $dataStock = sql("SELECT * FROM stockreport WHERE productName = '$name'");
    if (!empty($dataStock)) {
        $quantity = $dataStock[0]['quantity'];
        $quantity = $quantity + $Qty;
        update("stockreport", "productName = '$name'", array("qty"), array($quantity));
    } else {
        insert("stockreport", array("managerId", "productId", "productName", "unitCost", "quantity", "addDate", "manDate", "expDate"), array($managerId, $invoiceNo, $medicineName, $totalAmount, $Qty, $date, $details, $category));
    }
} elseif ($action == 'reject') {
    update("purchase", "id = '$id'", array("Rejected"), array("status"));
}
?>