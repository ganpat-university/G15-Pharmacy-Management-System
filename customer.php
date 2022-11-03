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
<?php include 'navbar.php'; ?>
<div class="container mx-auto">
    <div class="formcard pt-24">
        <div class="formheader max-w-auto border-b-4 border-yellow-700 rounded-l-xl">
            <div class="flex">
                <p class="text-white w-10 h-10 bg-yellow-700 focus:ring-4 focus:ring-yellow-300 font-medium rounded-l-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation"></p>
                <p class="head pt-1 pl-6 text-2xl">Add Customer</p>
            </div>
        </div>
        <div class="form bg-gray-100 p-4 mt-2 rounded">
            <table class="w-11/12 mx-auto">
                <thead class="text-sm">
                    <tr>
                        <td colspan="2"></td>
                        <td class="label pb-4">Date</td>
                        <td><p class="text-gray-600 pb-4">12/01/2022</p></td>
                    </tr>
                    <tr>
                        <td class="label">Bill Id</td>
                            <td><input type="text" placeholder="Bill Number"></td>
                        <td class="label">Customer Name</td>
                            <td><input type="text" placeholder="Customer name"></td>
                    </tr>
                    <tr>
                        <td class="label">Contact Number</td>
                            <td><input type="number" placeholder="XXXXX XXXXX" pattern=""></td>
                        <td class="label">Address</td>
                            <td><textarea placeholder="Address" class="w-11/12 h-8 mt-2 p-1"></textarea></td>
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
                        <td><input type="text" placeholder="Medicine Name"></td>
                        <td><input type="number" placeholder="0"></td>
                        <td><p class="bg-gray-300 mx-4">123</p></td>
                        <td><p class="bg-gray-300 mx-4">123</p></td>
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
                <div class="flex ml-4"><p class="w-36 px-4 p-2 bg-gray-300">1234 </p> <p class="p-2">Rs</p></div>
            </div>
            <hr class="border-1 border-gray-500 mt-4">
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
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>04/01/2022</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
</body>
<script>
    $(document).ready(function() {
        $('#list').DataTable( {
            "pagingType": "full_numbers"
        } );
        $("select").css({'height':"25px",'width':"70px","padding-left":"5px","margin-bottom":"30px"});       
        $("#list_filter input").css({"height":"20px","font-size":"10px","margin-bottom":"20px"});
} );

    $(document).on("click","#add",function(){
        let a=$($(this).parent()).parent();
        $("<tr>"+
            "<td><input type='text' placeholder='Medicine Name'></td>"+
            "<td><input type='number' placeholder='0'></td>"+
            "<td><p class='bg-gray-300 mx-4'>123</p></td>"+
            "<td><p class='bg-gray-300 mx-4'>123</p></td>"+
            "<td><img src='img/icons/delete.png' alt='delete' id='delete' class='w-6 bg-red-100 border-2 border-red-500 hover:bg-red-200 mx-auto'></td>"+
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