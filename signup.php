<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo-dark-removebg.png" type="image/icon type">
    <title>Pharmacy Management System</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <style>
        body {
            background-image: url('img/Pharmacy-Management-Software-1.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;   
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="form">
    <div href="#" class="card p-6 pl-16 pr-16 mb-6 max-w-4xl bg-gray-100 rounded-lg bg-gradient-to-r from-pink-500 to-yellow-500 delay-1000">
        <div class="header text-center font-semibold text-3xl">
            <p class="p-6">Register</p>
            <hr>
        </div>
        <div class="row grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-5">
            <div class="col1">
                <form action="registration.php" method="post">
                    <p>
                        <input type="text" class="h-12 mt-4" id='uname' placeholder="Enter Username" name="uname" required><br>
                        <input type="email" class="h-12 mt-4" id='email' placeholder="Enter Email address" name="email" required><br>
                        <input type="text" class="h-12 mt-4" id='pharmatoken' placeholder="Enter Pharma Token" name="pharmatoken" required><br>
                        <input type="password" class="h-12 mt-4" id="pwd" placeholder="Enter Password" name="pwd" required><br>
                        <p id="error_pwd"></p>
                        <input type="password" class="h-12 mt-4" placeholder="Retype Password" name="cpwd" required>
                    </p>
                    <p id="error"></p>
                    <button type="submit" class="rounded-full">Get Started</button>
                    <br><br>
                </form>
                    <div>Already have an account? <a href="login.php" class="text-blue-700">Log in</a></div>
            </div>
            <div class="col2">
                <div class="logo pt-6">
                    <a href="index.html" class="text-center">
                        <img src="img/logo-removebg.png" class="w-30">
                        <p class="p-6 font-bold font-sans text-xl">MakeEasy</p>
                    </a>
                </div>
                <p class="text-right pt-16"> Meet Prajapati</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>