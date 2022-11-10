<?php
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
    <style>
        .accept {
            border: none;
            color: white;
            padding: 2px 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .reject {
            border: none;
            color: white;
            padding: 2px 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        th,td {
            text-align: center;
            border: 1px solid black !important;
        }
        th {
            padding: 2px !important;
            margin: 0px !important;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="main">
        <div class="header text-center font-medium bg-green-700 text-white text-2xl py-2 my-6" style="letter-spacing: 10px;">
            ADMIN
        </div>
        <div class="table text-center w-full px-4">
            <table class="w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Manager ID</th>
                        <th>Invoice No</th>
                        <th>Medicine Name</th>
                        <th>Request Date</th>
                        <th>Qty</th>
                        <th>Total Amount</th>
                        <th>Details</th>
                        <th>Payment Type</th>
                        <th>Bank Name</th>
                        <th class="cat">Category</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM purchase";
                    $request = sql($sql);
                    foreach ($request as $row) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['managerId']; ?></td>
                        <td><?php echo $row['invoiceNo']; ?></td>
                        <td><?php echo $row['medicineName']; ?></td>
                        <td><?php echo $row['requestDate']; ?></td>
                        <td><?php echo $row['Qty']; ?></td>
                        <td><?php echo $row['totalAmount']; ?></td>
                        <td><?php echo $row['details']; ?></td>
                        <td><?php echo $row['paymentType']; ?></td>
                        <td><?php echo $row['bankName']; ?></td>
                        <td><?php echo $row['category']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td>
                            <div class="btn grid grid-cols-2">
                                <button class="accept"><img src="img/icons/accept.png" alt="accept"></button>
                                <button class="reject"><img src="img/icons/reject.png" alt="reject"></button>
                            </div>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('.table table').DataTable();
    });

    $('.accept').click(function() {
        var id = $(this).closest('tr').find('td:eq(0)').text();
        $.ajax({
            url: 'request.php',
            type: 'POST',
            data: {
                id: id,
                action: 'accept'
            },
            success: function(data) {
                location.reload();
            }
        });
    });
    $(".reject").click(function() {
        var id = $(this).closest('tr').find('td:eq(0)').text();
        $.ajax({
            url: 'request.php',
            type: 'POST',
            data: {
                id: id,
                action: 'reject'
            },
            success: function(data) {
                location.reload();
            }
        });
    });

</script>
</html>
