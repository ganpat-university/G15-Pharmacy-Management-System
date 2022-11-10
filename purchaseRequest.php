<?php include 'session.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo-dark-removebg.png" type="image/icon type">
    <title>Pharmacy Management System</title>
    <link rel="stylesheet" type="text/css" href="css/flowbite.min.css">
    <script src="js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/purchase.css">
</head>
<body>
<!-- Header included -->
<?php include 'header.php';
include 'navbar.php';
include 'db/db.php';
include 'function/function.php';

    $managerId = $_SESSION['pharmacyid'];
    $sql = "SELECT * FROM product;";
    $result = sql($sql);
    if (isset($_POST['submit'])) {
        $date = get('date');
        $invoiceNumber = get('invoiceNumber');
        $details = get('details');
        $paymentType = get('payment');
        $bank = get('bank');
        $rowCnt = get('rowCnt');
        $total = get('grandTotal');
        $subTotal = get('subTotal');
        $discount = get('discount');
        $status = "Pending";
        for ($x = 0; $x < $rowCnt; $x++) {
            $medicineName = $_POST['medicineName'][$x];
            $category = $_POST['category'][$x];
            $Quantity = $_POST['stockNo'][$x];
            $price = sql("SELECT * FROM product WHERE medicineName = '$medicineName';")[0]['supplierCost'];
            $price = floatval($price);
            $totalPrice = $price * $Quantity;
            insert("purchase",array("invoiceNo","managerId","requestDate","details","paymentType","bankName","status","medicineName","Qty","category","totalAmount"),array($invoiceNumber,$managerId,$date,$details,$paymentType,$bank,$status,$medicineName,$Quantity,$category,$totalPrice));
            insert("mail",array("sender","receiver","body","dateOfmail"),array("admin","$managerId","Purchase Request : Invoice Number : $invoiceNumber",$date));
        }
    ?>
        <div class="invalidmsg z-20 mt-10 flex justify-center w-full fixed">
                <div class="row p-2 w-96 text-center bg-green-500 shadow-xl shadow-gray-900 rounded-lg">
                    <p class="font-medium text-white">Purchase Request</p>
                    <p class="font-medium text-white">Sent to Admin successfully.</p>
                </div>
        </div>
    <?php
    }
    ?>
<!-- Header included -->

<div class="container mx-auto pt-24">
    <div class="cardform w-full justify-center bg-gray-100 p-6 shadow-xl shadow-gray-900 rounded">
        <div class="col1 mb-4 py-2 pl-4 border-b-2 text-xl border-gray-500">
            Request To Purchase
        </div>
        <div class="container">
            <form method="POST">
                <input type="text" value="0" name="rowCnt" class="rowCnt hidden">
            <table class="w-11/12 mx-auto table">
                <tr>
                    <td class="label">Supplier Name</td>
                        <td><input type="text" name="supplierName" value="Healthcare  Pharmacy pvt Ltd" class="text-gray-400 bg-gray-100 border-1 border-gray-300" disabled></td>
                    <td class="label">Date</td>
                        <td><input type="date" name="date" value=""></td>
                </tr>
                <tr>
                    <td class="label">Invoice Number</td>
                        <td><input type="text" name="invoiceNumber" value="" placeholder="Invoice No" required></td>
                    <td class="label">Details</td>
                        <td><textarea name="details" value="" placeholder="Details" class="p-1"></textarea></td>
                </tr>
                <tr>
                    <td class="label">Payment Type</td>
                        <td>
                            <select name="payment" value="" class="paymentMode p-2" required>
                                <option value="Cash">Cash Payment</option>
                                <option value="Credit">Bank Payment</option>
                            </select>
                        </td>
                    <td class="label bank" style="display: none;">Bank</td>
                        <td style="display: none;">
                            <select name="bank" value="Select Bank" class="p-2">
                                <option value="Select Bank">Select Bank</option>
                                <option value="Axis Bank Ltd">Axis Bank Ltd</option>
                                <option value="Bank Of Baroda">Bank Of Baroda</option>
                                <option value="Bank Of India">Bank Of India</option>
                                <option value="Bank Of Maharastra">Bank Of Maharastra</option>
                                <option value="Canara Bank">Canara Bank</option>
                                <option value="Central Bank Of India">Central Bank Of India</option>
                                <option value="ICICI Bank Ltd">ICICI Bank Ltd</option>
                                <option value="Indian Bank">Indian Bank</option>
                                <option value="Indian Overseas Bank">Indian Overseas Bank</option>
                                <option value="HDFC Bank Ltd">HDFC Bank Ltd</option>
                                <option value="Punjab National Bank">Punjab National Bank</option>
                                <option value="State Bank Of India">State Bank Of India</option>
                                <option value="Union Bank Of India">Union Bank Of India</option>
                                <option value="United Bank Of India">United Bank Of India</option>
                                <option value="Yes Bank Ltd">Yes Bank Ltd</option>
                            </select>
                        </td>
                </tr>
            </table>
            <table class="medicineInformation w-full mt-6">
                <thead>
                    <tr>
                        <td class="w-3/12">Medicine Information</td>
                        <td>Stock Qty</td>
                        <td>Category</td>
                        <td>Supplier Price</td>
                        <td>Total Purchase Price</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input list="medicine" name="medicineName[]" class="med0" id="med" required>
                            <datalist id="medicine" >
                                <?php
                                    foreach ($result as $row) {
                                        echo "<option value='".$row['medicineName']."'>";
                                    }
                                ?>
                            </datalist>
                        </td>
                        <td><input type="number" name="stockNo[]" min="1" value="1" id="stockQty" required></td>
                        <td>
                            <select name="category[]" id="category" class="bg-gray-100 h-full p-1" required>
                                <option value="Tablet">Tablet</option>
                                <option value="Capsule">Capsule</option>
                                <option value="Syrup">Syrup</option>
                                <option value="Injection">Injection</option>
                                <option value="Cream">Cream</option>
                                <option value="Gel">Gel</option>
                                <option value="Drop" class="Drop">Drop</option>
                                <option value="Powder">Powder</option>
                                <option value="Antibiotic Eyedrops">Antibiotic Eyedrops</option>
                            </select>
                        </td>
                        <td><p class="supplierPrice[] bg-gray-300 p-1" id="supplierPrice">0.00</p></td>
                        <td class="flex">
                            <div class="col1 w-11/12">
                                <p class="totalPurchase[] p-1 bg-gray-300" id="totalPurchase">0.00</p>
                            </div>
                            <div class="col2">Rs</div>
                        </td>
                        <td><img src="img/icons/delete.png" alt="delete" id="delete" class="w-8 bg-red-100 border-2 border-red-500 hover:bg-red-200 mx-auto"></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" class="compField">Sub Total</td>
                        <td class="flex">
                            <div class="col1 w-11/12">
                                <p class="subTotal p-1 bg-gray-300" id="subTotal">0</p>
                                <input type="text" name="subTotal" class="hidden">
                            </div>
                            <div class="col2">Rs</div>
                        </td>
                        <td><img src="img/icons/add2.png" alt="add" id="add" class="w-8 p-1 bg-blue-200 mx-auto border-2 border-blue-500 hover:bg-blue-300"></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="compField">Discount</td>
                        <td class="flex">
                            <div class="col1 w-11/12">
                                <input type="text" placeholder="0.00">
                            </div>
                            <div class="col2 pl-2">%</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" class="compField">Grand Total</td>
                        <td class="flex">
                            <div class="col1 w-11/12">
                                <p class="grandTotal p-1 bg-gray-300" id="grandTotal">000</p>
                                <input type="text" name="grandTotal" class="hidden">
                            </div>
                            <div class="col2">Rs</div>
                        </td>
                    </tr>
            </table>
            <div class="w-full pr-4 mt-6 flex justify-end gap-2">
                <button class="btn"><a href="purchase.php" >Cancel</a></button>
                <input type="submit" name="submit" class="submit">
            </div>
            </form>
        </div>
    </div>
</div>
</body>
<script>
    let cnt = 1,cnt1=1;
    $(".rowCnt").val(cnt);
    $(document).on("click","#add",function(){
        let a=$($(this).parent()).parent();
        $('<tr>'+
                        '<td><input list="medicine" class="med'+cnt1+'" name="medicineName[]" id="med" required>'+
                            '<datalist id="medicine" >'+ "<?php foreach ($result as $row) {echo "<option value='".$row['medicineName']."'>";}?>"+
                            '</datalist>'+
                        '</td>'+
                        '<td><input type="number" name="stockNo[]" min="1" value="1" id="stockQty" required></td>'+
                        '<td>'+
                            '<select name="category[]" id="category" class="bg-gray-100 h-full p-1" required>'+
                                '<option value="Tablet">Tablet</option><option value="Capsule">Capsule</option><option value="Syrup">Syrup</option><option value="Injection">Injection</option><option value="Cream">Cream</option><option value="Gel">Gel</option><option value="Drop" class="Drop">Drop</option><option value="Powder">Powder</option><option value="Antibiotic Eyedrops">Antibiotic Eyedrops</option>'+
                            '</select>'+
                        '</td>'+
                        '<td><p class="supplierPrice[] bg-gray-300 p-1" id="supplierPrice">0.00</p></td>'+
                        '<td class="flex">'+
                            '<div class="col1 w-11/12">'+
                                '<p class="totalPurchase[] p-1 bg-gray-300" id="totalPurchase">0</p>'+
                            '</div>'+
                            '<div class="col2">Rs</div>'+
                        '</td>'+
                        '<td><img src="img/icons/delete.png" alt="delete" id="delete" class="w-8 bg-red-100 border-2 border-red-500 hover:bg-red-200 mx-auto"></td>'+
                    '</tr>').insertBefore(a);
            cnt = cnt + 1;
            cnt1 = cnt1 + 1;
            $(".rowCnt").val(cnt);
    });
    $(document).on("click","#delete",function(){
        let a=$($(this).parent()).parent();
        let subTotal = $("#subTotal").text();
        let totalPurchase = $(this).parent().prev().children().text();
        let newSubTotal = parseFloat(subTotal) - parseFloat(totalPurchase);
        $("#subTotal").text((Number(newSubTotal).toFixed(2)));
        $("#grandTotal").text((Number(newSubTotal).toFixed(2)));
        a.remove();
        cnt = cnt - 1;
        $(".rowCnt").val(cnt);
   });
   $(document).on("change",".paymentMode",function(){
         let a=$($(this).parent()).parent();
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
    let med = $(this).val();
    $.ajax({
        url: "insertPurchase.php",
        type: "POST",
        data: {med: med},
        success: function(data){
            b=data;
            let preSup = $("."+a).parent().next().next().next().next().find("#totalPurchase").text();
            $("."+a).parent().next().next().next().find("#supplierPrice").text(data);
            $("."+a).parent().next().next().next().next().find("#totalPurchase").text(data);
            subTot=$("#subTotal").text();
            sub = parseFloat(subTot) + parseFloat(b) - parseFloat(preSup);
            $("#subTotal").text(Number((sub).toFixed(2)));
            $("#grandTotal").text(Number((sub).toFixed(2)));
        }
    });
   });
   $(document).on("change","#stockQty",function(){
        let supPri = $(this).parent().next().next().next().find("#totalPurchase").text();
        let a=$(this).parent().next().next().find("#supplierPrice").text();
        let b=$(this).val();
        let c=a*b;
        $(this).parent().next().next().next().find("#totalPurchase").text(c);
        if ($("#subTotal").text() == 0) {
            $("#subTotal").text(c);
        } else {
            let d = $("#subTotal").text();
            let e = parseFloat(d)+ parseFloat(c) - parseFloat(supPri);
            // console.log("pre"+supPri+" preSub"+d+" cur" + c + "e"+e);
            if (d == Number((e).toFixed(2))){
                e=e+parseFloat(supPri);
            }
            // console.log(Number((e).toFixed(2)));
            $("#subTotal").text(Number((e).toFixed(2)));
            $("#grandTotal").text(Number((e).toFixed(2)));
        }
    });

$(document).on("click",".invalidmsg",function(){
    $(this).remove();
});

</script>

</html>