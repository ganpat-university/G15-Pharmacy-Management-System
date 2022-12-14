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
    <link rel="stylesheet" type="text/css" href="css/flowbite.min.css">
    <script src="js/jquery.dataTables.min.js"></script>
</head>
<body>
<?php include 'header.php'; 
    include 'navbar.php'; 
    $managerId = $_SESSION['pharmacyid'];
?>

<div class="container mx-auto">
    <div class="menu max-w-auto border-b-4 border-blue-700 rounded-l-xl">
        <div class="pt-24 flex">
            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-l-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                <svg viewBox="0 0 100 80" width="20" height="20">
                    <rect width="60" height="10"></rect>
                    <rect y="30" width="80" height="10"></rect>
                    <rect y="60" width="100" height="10"></rect>
                </svg>
            </button>
            <p class="head pt-1 pl-6 text-2xl">Medicine List</p>
        </div>
    </div>
    
    <div class="main max-w-auto">
        <div class="table py-10  w-full">
            <table class="display" width="100%" id="tableList">
                <thead>
                    <tr>
                        <th class="w-12">Sr No</th>
                        <th>Medicine Name</th>
                        <th>Generic Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Strength</th>
                        <th>Images</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $sql = "SELECT * FROM stockreport where managerId = '$managerId'";
                        $result = sql($sql);
                        $sr = 1;
                        foreach ($result as $row) {
                            $medicineName = $row['productName'];
                            $medicineData = "SELECT * FROM product where medicineName = '$medicineName'";
                            $medicineResult = sql($medicineData);
                            $genName = $medicineResult[0]['genericName'];
                            $category = $medicineResult[0]['category'];
                            $strength = $medicineResult[0]['strength'];
                            $image = $medicineResult[0]['medicineImage'];
                            if ($image == "") {
                                $image = "img/medicine.png";
                            } else {
                                $image = "data:image/jpeg;base64,".base64_encode($image);
                            }
                            echo "<tr>
                                    <td>".$sr."</td>
                                    <td>".$medicineName."</td>
                                    <td>".$genName."</td>
                                    <td>".$category."</td>
                                    <td>".$row['unitCost']."</td>
                                    <td>".$strength."</td>
                                    <td><img src='".$image."' class='w-14 h-14'></td>
                                    <td>".$row['quantity']."</td>
                                </tr>";
                            $sr++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'menu.php'; ?>
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
</body>
</html>