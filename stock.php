<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo-dark-removebg.png" type="image/icon type">
    <title>Pharmacy Management System</title>
    <link rel="stylesheet" type="text/css" href="css/stock.css">
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
</head>
<body>
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<div class="container mx-auto">
    <div class="main max-w-auto">
<!--  -->
        <div class="medicine">
            <p class="pt-24"></p>
            <div class="border-blue-700 mx-4 headborder">
                <p class="px-8 py-3 mt-14 text-white text-3xl bg-blue-500 w-2/6 head">Medicine</p>
            </div>
            <div class="card p-16 pt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-14">
                <a href="medicine.php">
                    <div class="innercard bg-white h-40 rounded-md shadow-2xl p-4 text-blue-600">
                            <div class="img">
                                <img src="img/medicine2.png" alt="medicine" class="icon w-16 h-16">
                            </div>
                            <div>
                                <p class="cat font-semibold">VIEW MEDICINE</p>
                            </div>
                    </div>
                </a>
                <a href="medicineUpdate.php">
                    <div class="innercard bg-white h-40 rounded-md shadow-2xl p-4 text-blue-600">
                        <div class="img">
                            <img src="img/icons/add2.png" alt="medicine" class="icon h-16">
                        </div>
                        <div>
                            <p class="cat font-semibold">ADD MEDICINE</p>
                        </div>
                    </div>
                </a>
                <a href="medicineUpdate.php">
                    <div class="innercard bg-white h-40 rounded-md shadow-2xl p-4 text-blue-600">
                        <div class="img">
                            <img src="img/expired.png" alt="medicine" class="icon h-16">
                        </div>
                        <div>
                            <p class="cat font-semibold">Expired Medicine</p>
                        </div>
                    </div>
                </a>
                <a href="medicineUpdate.php">
                    <div class="innercard bg-white h-40 rounded-md shadow-2xl p-4 text-blue-600">
                        <div class="img">
                            <img src="img/icons/add.png" alt="medicine" class="icon h-16">
                        </div>
                        <div>
                            <p class="cat font-semibold">Out Of Stock</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
<!--  -->
        <div class="type">
            <div class="border-green-900 mx-4 headborder">
                <p class="px-8 py-3 mt-14 text-white text-3xl bg-green-500 w-2/6 head">Types</p>
            </div>
            <div class="card p-16 pt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-14">
                <a href="#">
                    <div class="innercard bg-white h-40 rounded-md shadow-2xl p-4 text-green-600">
                        <div class="img">
                            <img src="img/category.png" alt="category" class="icon h-16">
                        </div>
                        <div>
                            <p class="cat font-semibold">VIEW TYPE</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="innercard bg-white h-40 rounded-md shadow-2xl p-4 text-green-600">
                        <div class="img">
                            <img src="img/category.png" alt="category" class="icon h-16">
                        </div>
                        <div>
                            <p class="cat font-semibold">ADD TYPE</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="footer">
        <p class="text-center text-white text-lg py-4">© 2021 Pharmacy Management System</p>
    </div>
    <?php include 'mail.php'; ?>
</div>
</body>
</html>