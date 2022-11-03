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
</head>
<body>
<?php include 'header.php';?>
<?php include 'navbar.php';?>
<div class="container mx-auto pt-24">
    <div class="cardform w-full justify-center bg-gray-100 p-6 shadow-xl shadow-gray-900 rounded">
        <div class="row grid mb-4 pl-4 border-b-2 border-gray-500">
            <div class="col1 text-2xl font-medium">
                Purchase List
            </div>
            <div class="col2 flex justify-self-end text-white font-medium -mt-6 p-1">
                <button class="p-1 px-2 rounded" style="background-color: #01b301;"> <a href="purchaseRequest.php" class="flex"><img src="img/icons/addWhite.png" alt="request" class="w-6 mr-2">Request For Purchase</a> </button>
            </div>
        </div>
        <div class="container">
            <div class="table pb-10  w-full">
                <table class="display" width="100%" id="tableList">
                    <thead>
                        <tr>
                            <th class="w-14">Sr No</th>
                            <th>Invoice No</th>
                            <th>Products</th>
                            <th>Date</th>
                            <th>Box Qty</th>
                            <th>Total Amount</th>
                            <th>Status</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td class=""><p class="text-red-600 font-semibold">Pending</p></td>
                            <td>
                                <img src="img/icons/eye.png" alt="Details" class="bg-green-100 hover:bg-green-200 p-1 w-8 border-2 border-gray-400">
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td class=""><p class="text-blue-600 font-semibold">Accepted</p></td>
                            <td>
                                <img src="img/icons/eye.png" alt="Details" class="bg-green-100 hover:bg-green-200 p-1 w-8 border-2 border-gray-400">
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td class=""><p class="font-semibold" style="color: #0A0;">Delivered</p></td>
                            <td>
                                <img src="img/icons/eye.png" alt="Details" class="bg-green-100 hover:bg-green-200 p-1 w-8 border-2 border-gray-400">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include 'mail.php'; ?>
</div>
</body>
<script>
    $(document).ready(function() {
        $('#tableList').DataTable( {
            "pagingType": "full_numbers"
        } );
        $("select").css({'height':"35px",'width':"55px","padding-left":"5px","margin-bottom":"30px"});       
        $("#tableList_filter input").css('height',"35px");  
        $("th").css({"font-weight":"400"});
} );
</script>
</html>