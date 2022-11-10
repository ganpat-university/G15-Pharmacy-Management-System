<?php
include 'session.php';
include 'db/db.php';
include 'function/function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo-dark-removebg.png" type="image/icon type">
    <title>Pharmacy Management System</title>
    <link rel="stylesheet" type="text/css" href="css/customer.css">
    <link rel="stylesheet" type="text/css" href="css/flowbite.min.css">
    <script src="js/jquery.dataTables.min.js"></script>
</head>
<body>
<?php include 'header.php'; ?>
<?php include 'navbar.php'; 

$managerId = $_SESSION['pharmacyid'];
$sql = "SELECT * FROM stockreport;";
$result = sql($sql);
$sqlCustomer = "SELECT * FROM customer";
$result2 = sql($sqlCustomer);
if (isset($_POST['submit'])) {
    $billId = get('billId');
    $billId_old = sql("SELECT * FROM customer where managerId=$managerId and billId='$billId';");
if (empty($billId_old)) {
    $customerName = get('customerName');
    $customerPhone = get('customerPhone');
    $date = date('Y-m-d');
    $address = get('address');
    $rowCnt = get("rowCnt");
    for ($i = 0; $i < $rowCnt; $i++) {
        $medicineName = $_POST['medicineName'][$i];
        $quantity = $_POST['quantity'][$i];
        $data = sql("SELECT * FROM product WHERE medicineName = '$medicineName';")[0];
        $price = $data['unitCost'];
        $medicineId = $data['id'];
        $total = $quantity * $price;
        insert("customer", array("managerId", "customerName", "billId", "billDate", "medicineName", "amountPaid", "quantity"), array($managerId, $customerName, $billId, $date, $medicineId, $total, $quantity));
        $stockreports = "SELECT * FROM stockreport WHERE productName = '$medicineName' AND managerId = $managerId";
        $stock = sql($stockreports);
        $stock = $stock[0]['quantity'];
        $stock = $stock - $quantity;
        update("stockreport", "productName = '$medicineName' AND managerId = $managerId", array($stock), array("quantity"));
    }
    ?>
    <script>
        alert("Bill Added Successfully");
        </script>
    <?php
} else {
    ?>
    <script>
        alert("Bill Id Already Exist");
        </script>
    <?php
    }
}
?>
<div class="container mx-auto">
    <div class="formcard pt-24">
        <div class="formheader max-w-auto border-b-4 border-yellow-700 rounded-l-xl">
            <div class="flex">
                <p class="text-white w-10 h-10 bg-yellow-700 focus:ring-4 focus:ring-yellow-300 font-medium rounded-l-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation"></p>
                <p class="head pt-1 pl-6 text-2xl">Add Customer</p>
            </div>
        </div>
        <div class="form bg-gray-100 p-4 mt-2 rounded">
            <form method="POST">
                <input type="text" value="0" name="rowCnt" class="rowCnt hidden">
                <table class="w-11/12 mx-auto">
                    <thead class="text-sm">
                        <tr>
                            <td colspan="2"></td>
                            <td class="label pb-4">Date</td>
                            <td><p class="text-gray-600 pb-4"><?php echo date('d-m-Y')?></p></td>
                        </tr>
                        <tr>
                            <td class="label">Bill Id</td>
                                <td><input type="text" name="billId" placeholder="Bill Number" required></td>
                            <td class="label">Customer Name</td>
                                <td><input type="text" name="customerName" placeholder="Customer name" required></td>
                        </tr>
                        <tr>
                            <td class="label">Contact Number</td>
                                <td><input type="text" name="contactNumber" placeholder="XXXXX XXXXX" required></td>
                            <td class="label">Address</td>
                                <td><textarea placeholder="Address" name="address" class="w-11/12 h-8 mt-2 p-1"></textarea></td>
                        </tr>
                    </thead>
                </table>
                <table class="mt-6 w-full text-center bill">
                    <thead>
                        <tr>
                            <td>Medicine Name</td>
                            <td>Quantity</td>
                            <td>Unit Cost</td>
                            <td>Total Cost</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input list="medicine" name="medicineName[]" placeholder="Medicine Name" class="med0" id="med" required>
                                <datalist id="medicine" >
                                    <?php
                                        foreach ($result as $row) {
                                            echo "<option value='".$row['productName']."'>";
                                        }
                                    ?>
                                </datalist>
                            </td>
                            <td><input type="number" name="quantity[]" id="quantity" value="1" min='0' required></td>
                            <td><p class="bg-gray-300 mx-4" id="unitCost">0</p></td>
                            <td><p class="bg-gray-300 mx-4" id="TotalCost">0</p></td>
                            <td><img src="img/icons/delete.png" alt="delete" id="delete" class="w-6 bg-red-100 border-2 border-red-500 hover:bg-red-200 mx-auto"></td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                            <td><img src="img/icons/add2.png" alt="add" id="add" class="w-6 my-1 p-1 bg-blue-200 mx-auto border-2 border-blue-500 hover:bg-blue-300"></td>
                        </tr>
                    </tbody>
                </table>
                <hr class="border-1 border-gray-500 mt-4">
                <div class="foot flex justify-end mt-3 mx-14">
                    <div class="p-2 font-medium">Grand Total : </div>
                    <div class="flex ml-4"><p class="grandTotal w-36 px-4 p-2 bg-gray-300">0</p> <p class="p-2">Rs</p></div>
                </div>
                <hr class="border-1 border-gray-500 mt-4">
                <div class="foot flex justify-end mx-14">
                    <input type="submit" value="Add" id="submit" name="submit" class="submit py-1 mt-5 w-24 rounded">
                </div>
            </form>
        </div>
    </div>
    <div class="customerList mt-10">
        <div class="formheader max-w-auto border-b-4 border-yellow-700 rounded-l-xl">
            <div class="flex">
                <p class="text-white w-10 h-10 bg-yellow-700 focus:ring-4 focus:ring-yellow-300 font-medium rounded-l-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation"></p>
                <p class="head pt-1 pl-6 text-2xl">Customer List</p>
            </div>
        </div>
        <div class="list bg-gray-200 p-4 mt-2 rounded">
            <table class="w-full" id="list">
                <thead>
                    <tr>
                        <td>Sr No</td>
                        <td>Customer Name</td>
                        <td>Bill ID</td>
                        <td>Date</td>
                        <td>Items Purchased</td>
                        <td>Paid Amount</td>
                        <td>Details</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sr = 1;
                        foreach ($result2 as $row) {
                            echo "<tr>";
                            echo "<td>".$sr."</td>";
                            echo "<td>".$row['customerName']."</td>";
                            echo "<td>".$row['billId']."</td>";
                            echo "<td>".$row['billDate']."</td>";
                            echo "<td>".$row['quantity']."</td>";
                            echo "<td>".$row['amountPaid']."</td>";
                            echo "<td><a href='customerDetails.php?billId=".$row['billId']."'><img src='img/icons/eye.png' alt='details' class='w-6'></a></td>";
                            echo "</tr>";
                            $sr++;
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
</body>
<script>
    let cnt = 1,cnt1=1;
    $(".rowCnt").val(cnt);

    $(document).ready(function() {
        $('#list').DataTable( {
            "pagingType": "full_numbers"
        } );
        $("select").css({'height':"25px",'width':"70px","padding-left":"5px","margin-bottom":"30px"});       
        $("#list_filter input").css({"height":"20px","font-size":"10px","margin-bottom":"20px"});
    } );

    $(document).on("click","#add",function(){
        let a=$($(this).parent()).parent();
        $('<tr>'+
                '<td><input list="medicine" name="medicineName[]" placeholder="Medicine Name" class="med'+cnt1+'" id="med" required>'+
                    '<datalist id="medicine" >'+"<?php foreach ($result as $row) {echo "<option value='".$row['productName']."'>";} ?>"+
                    '</datalist>'+
                '</td>'+
                '<td><input type="number" name="quantity[]" id="quantity" min="0" value="1"></td>'+
                '<td><p class="bg-gray-300 mx-4" id="unitCost">0</p></td>'+
                '<td><p class="bg-gray-300 mx-4" id="TotalCost">0</p></td>'+
                '<td><img src="img/icons/delete.png" alt="delete" id="delete" class="w-6 bg-red-100 border-2 border-red-500 hover:bg-red-200 mx-auto"></td>'+
            '</tr>').insertBefore(a);
        cnt++;
        cnt1++;
        $(".rowCnt").val(cnt);
    });
    $(document).on("click","#delete",function(){
        let a=$($(this).parent()).parent();
        let total = parseFloat($(".grandTotal").text());
        let b = parseFloat($(this).parent().prev().text());
        total = total - b;
        $(".grandTotal").text(Number((total).toFixed(2)));
        $(a).remove();
        cnt--;
        $(".rowCnt").val(cnt);
   });
   $(document).on("change",".paymentMode",function(){
         let a=$($(this).parent()).parent();
         console.log(a);
         if($(a).find(".paymentMode").val()=="Credit"){
              $(a).find(".bank").show();
              $(a).find(".bank").next().show();
         }
         else{
              $(a).find(".bank").hide();
              $(a).find(".bank").next().hide();
         }
    });    
    $(document).on("change","#med",function(){
        let a=$(this).attr("class"),b;
        let med=$(this).val();
        $.ajax({
            url: "customerPurchase.php",
            type: "POST",
            data: {med:med},
            success: function(data){
                b = data;
                let preCost = $("."+a).parent().next().next().next().find("#TotalCost").text();
                let cost = parseInt(preCost) + parseInt(b);
                $("."+a).parent().next().next().find("#unitCost").text(b);
                $("."+a).parent().next().next().next().find("#TotalCost").text(b);

                grandTotal=$(".grandTotal").text();
                grandTotal=parseFloat(grandTotal) + parseFloat(b) - parseFloat(preCost);
                $(".grandTotal").text(Number((grandTotal).toFixed(2)));
            }
        });
    });
    $(document).on("change","#quantity",function(){
        let subTotal = $(this).parent().next().next().find("#TotalCost").text();
        let quantity = $(this).val();
        let unitCost = $(this).parent().next().find("#unitCost").text();
        let totalCost = parseFloat(quantity) * parseFloat(unitCost);
        $(this).parent().next().next().find("#TotalCost").text(Number((totalCost).toFixed(2)));

        grandTotal=$(".grandTotal").text();
        grandTotal=parseFloat(grandTotal) + parseFloat(totalCost) - parseFloat(subTotal);
        $(".grandTotal").text(Number((grandTotal).toFixed(2)));
    });
</script>
</html>