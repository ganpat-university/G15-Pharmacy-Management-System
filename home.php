<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo-dark-removebg.png" type="image/icon type">
    <title>Pharmacy Management System</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<div class="container mx-auto">
    <div class="row py-16 pt-32">
        <div class="col max-w-auto px-16 mt-8">
            <div class="headcard p-6 rounded-md">
                <div class="card-body p-2">
                    <div>
                        <img src="img/icons/folder.png" alt="folder" class="folder mx-0 -mt-24">
                        <p class="ml-24 -mt-16 mb-8 text-2xl text-green-700"><b class="font-medium text-3xl">C</b>ustomizable <b class="font-medium text-3xl">P</b>harmacy <b class="font-medium text-3xl">W</b>orkflow</p>
                    </div>
                    <div class="grid grid-cols-2 w-full">
                        <p class="descrip text-lg w-full h-3/6 my-auto">PMS is a comprehensive, flexible pharmacy workflow solution that organizes and stores all the documents and media that keep your pharmacy running smoothly.</p>
                        <img src="img/Illustration.png" class="illustrate w-3/6 justify-self-end">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main max-w-auto">
        <div class="card p-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-14">
            <div class="card1 bg-white h-40 rounded-md shadow-2xl p-4 text-yellow-600">
                <div class="img">
                    <img src="img/customer.png" alt="customer" class="icon w-16 h-16">
                </div>
                <div>
                    <p class="font-semibold">TOTAL CUSTOMER</p>
                    <p class="text-xl"><i>1,25,234</i></p>
                    <hr class="pb-3">
                    <a href="customer.php" class="text-blue-500 text-xs"> <i>Show Details . . .</i></a>
                </div>
            </div>
            <div class="card2 bg-white h-40 rounded-md shadow-2xl p-4 text-green-600">
                <div class="img">
                    <img src="img/medicine.png" alt="medicine" class="icon w-16 h-16">
                </div>
                <div>
                    <p class="font-semibold">TOTAL MEDICINE</p>
                    <p class="text-xl"><i>125</i></p>
                    <hr class="pb-3">
                    <a href="customer.php" class="text-blue-500 text-xs"> <i>Show Details . . .</i></a>
                </div>
            </div>
            <div class="card3 bg-white h-40 rounded-md shadow-2xl p-4 text-red-600">
                <div class="img">
                    <img src="img/stock.png" alt="stock" class="iconstock w-14">
                </div>
                <div>
                    <p class="font-semibold">OUT OF STOCK</p>
                    <p class="text-xl"><i>25</i></p>
                    <hr class="pb-3">
                    <a href="customer.php" class="text-blue-500 text-xs"> <i>Show Details . . .</i></a>
                </div>
            </div>
            <div class="card4 bg-white h-40 rounded-md shadow-2xl p-4 text-blue-600">
                <div class="img">
                    <img src="img/calendar-icon.png" alt="calendar" class="icon w-16 h-16">
                </div>
                <div>
                    <p class="font-semibold">EXPIRED MEDICINE</p>
                    <p class="text-xl"><i>40</i></p>
                    <hr class="pb-3">
                    <a href="customer.php" class="text-blue-500 text-xs"> <i>Show Details . . .</i></a>
                </div>
            </div>
            </div>
        </div>
    </div>

    <?php include 'mail.php'; ?>
</div>


</body>
</html>