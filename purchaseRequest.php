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
<?php include 'header.php';?>
<?php include 'navbar.php';?>
<?php include 'db/db.php';?>
<?php include 'function/function.php';?>
<!-- Header included -->

<div class="container mx-auto pt-24">
    <div class="cardform w-full justify-center bg-gray-100 p-6 shadow-xl shadow-gray-900 rounded">
        <div class="col1 mb-4 py-2 pl-4 border-b-2 text-xl border-gray-500">
            Request To Purchase
        </div>
        <div class="container">
            <table class="w-11/12 mx-auto table">
                <tr>
                    <td class="label">Supplier Name</td>
                        <td><input type="text" name="medicineID" value="Healthcare  Pharmacy pvt Ltd" class="text-gray-400 bg-gray-100 border-1 border-gray-300" disabled></td>
                    <td class="label">Date</td>
                        <td><input type="date" name="medicineID" value=""></td>
                </tr>
                <tr>
                    <td class="label">Invoice Number</td>
                        <td><input type="text" name="medicineID" value="" placeholder="Invoice No"></td>
                    <td class="label">Details</td>
                        <td><textarea name="medicineID" value="" placeholder="Details" class="p-1"></textarea></td>
                </tr>
                <tr>
                    <td class="label">Payment Type</td>
                        <td>
                            <select name="banck" value="" class="paymentMode p-2">
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
                        <td>Sr No</td>
                        <td class="w-3/12">Medicine Information</td>
                        <td>Stock Qty</td>
                        <td>Box Qty</td>
                        <td>Supplier Price</td>
                        <td>Total Purchase Price</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><input list="medicine">
                            <datalist id="medicine" >
                                <?php
                                    $sql = "SELECT * FROM product;";
                                    $result = sql($sql);
                                    foreach ($result as $row) {
                                        echo "<option value='".$row['medicineName']."'>";
                                    }
                                ?>
                            </datalist>
                        </td>
                        <td><p class="bg-gray-300 p-1">124</p></td>
                        <td><input type="number"></td>
                        <td><p class="bg-gray-300 p-1">200</p></td>
                        <td class="flex">
                            <div class="col1 w-11/12">
                                <p class="totalPurchase p-1 bg-gray-300">1,230</p>
                            </div>
                            <div class="col2">Rs</div>
                        </td>
                        <td><img src="img/icons/delete.png" alt="delete" id="delete" class="w-8 bg-red-100 border-2 border-red-500 hover:bg-red-200 mx-auto"></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" class="compField">Sub Total</td>
                        <td class="flex">
                            <div class="col1 w-11/12">
                                <p class="totalPurchase p-1 bg-gray-300">1,230</p>
                            </div>
                            <div class="col2">Rs</div>
                        </td>
                        <td><img src="img/icons/add2.png" alt="add" id="add" class="w-8 p-1 bg-blue-200 mx-auto border-2 border-blue-500 hover:bg-blue-300"></td>
                    </tr>
                    <tr>
                        <td colspan="5" class="compField">Discount</td>
                        <td class="flex">
                            <div class="col1 w-11/12">
                                <input type="text" placeholder="0.00">
                            </div>
                            <div class="col2 pl-2">%</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" class="compField">Grand Total</td>
                        <td class="flex">
                            <div class="col1 w-11/12">
                                <p class="totalPurchase p-1 bg-gray-300">1,230</p>
                            </div>
                            <div class="col2">Rs</div>
                        </td>
                    </tr>
            </table>
            <div class="w-full pr-4 mt-6 flex justify-end gap-2">
                <button class="btn"><a href="purchase.php" >Cancel</a></button>
                <button class="submit">Submit</button>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    $(document).on("click","#add",function(){
        let a=$($(this).parent()).parent();
        $("<tr>"+
                        "<td>1</td>"+
                        "<td><input type='text'></td>"+
                        "<td><p class='bg-gray-300 p-1'>124</p></td>"+
                        "<td><input type='number'></td>"+
                        "<td><p class='bg-gray-300 p-1'>200</p></td>"+
                        "<td class='flex'>"+
                            "<div class='col1 w-11/12'>"+
                                "<p class='totalPurchase p-1 bg-gray-300'>1,230</p>"+
                            "</div>"+
                            "<div class='col2'>Rs</div>"+
                        "</td>"+
                        "<td><img src='img/icons/delete.png' alt='delete' id='delete' class='w-8 bg-red-100 border-2 border-red-500 hover:bg-red-200 mx-auto'></td>"+
                    "</tr>").insertBefore(a);
    });
    $(document).on("click","#delete",function(){
        let a=$($(this).parent()).parent();
        console.log(a);
        $(a).remove();
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
</script>

</html>