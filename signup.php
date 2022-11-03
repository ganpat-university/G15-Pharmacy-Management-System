<?php

use LDAP\Result;

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
<?php
if(isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['pharmatoken']) && isset($_POST['pwd'])){
    $uname = get("uname");
    $email = get("email");
    $pharmatoken = get("pharmatoken");
    $pwd = get("pwd");
    $sql = "SELECT * from token where token='$pharmatoken';";
    $result = sql($sql);
    if (!empty($result)) {
        if (0 == $result[0]['status']){
            $result2 = sql("SELECT * from manager where emailId='$email';");
            if (empty($result2)) {
                insert("manager",array("managerName","emailId","pharmaToken","passwd"),array($uname,$email,$pharmatoken,$pwd));
                update("token","token='$pharmatoken'",array(1),array("status"));
                session_start();
                $sql = "SELECT * from manager where emailId='$email';";
                $result3 = sql($sql);
                $_SESSION['pharmacyid'] = $result3[0]['id'];
                $_SESSION['managerName'] = $result3[0]['managerName'];
                $_SESSION['emailId'] = $result3[0]['emailId'];
                header("Location: home.php");
            } else {?>
                <div class="invalidmsg flex justify-center w-full fixed">
                        <div class="row p-2 w-96 h-10 text-center bg-red-500 shadow-xl shadow-gray-900 rounded-lg">
                            <p class="font-medium text-white">Already Email Exist !!!</p>
                        </div>
                </div>
        <?php
            }
        } else {?>
            <div class="invalidmsg flex justify-center w-full fixed">
                    <div class="row p-2 w-96 h-10 text-center bg-red-500 shadow-xl shadow-gray-900 rounded-lg">
                            <p class="font-medium text-white">Token Already Used !!!</p>
                    </div>
            </div>
    <?php
        }
    } else {?>
        <div class="invalidmsg flex justify-center w-full fixed">
                <div class="row p-2 w-96 h-10 text-center bg-red-500 shadow-xl shadow-gray-900 rounded-lg">
                            <p class="font-medium text-white">Invalid Token !!!</p>
                </div>
        </div>
<?php
    }
}
?>

<div class="form">
    <div href="#" class="card p-6 pl-16 pr-16 mb-6 max-w-4xl bg-gray-100 rounded-lg bg-gradient-to-r from-pink-500 to-yellow-500 delay-1000">
        <div class="header text-center font-semibold text-3xl">
            <p class="p-6">Registration</p>
            <hr>
        </div>
        <div class="row grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-5">
            <div class="col1">
                <form method="post">
                    <p>
                        <input type="text" class="h-12 mt-4" id='uname' placeholder="Enter Username" name="uname" required><br>
                        <input type="email" class="h-12 mt-4" id='email' placeholder="Enter Email address" name="email" required><br>
                        <input type="text" class="h-12 mt-4" id='pharmatoken' placeholder="Enter Pharma Token" name="pharmatoken" required><br>
                        <input type="password" class="h-12 mt-4" id="pwd" placeholder="Enter Password" name="pwd" required><br>
                        <p id="error_pwd"></p>
                        <input type="password" class="h-12 mt-4" id="cpwd" placeholder="Retype Password" name="cpwd" required>
                    </p>
                    <p id="error"></p>
                    <button type="submit" class="signup rounded-full" disabled>Get Started</button>
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
<script>
    var pwd = document.getElementById("pwd");
    var cpwd = document.getElementById("cpwd");
    var error = document.getElementById("error");
    var error_pwd = document.getElementById("error_pwd");
    $(document).ready(function(){
        $(".invalidmsg").delay(3000).fadeOut();
    });
    $("#cpwd").keyup(function(){
        console.log("1");
        if (pwd.value != cpwd.value) {
            $("#error").html("Password not matched");
            $(this).css("color","red");
            $("#error").css("color","red");
            $(".signup").attr("disabled",true);
        } else {
            $("#error").html("");
            $("#error").css("color","green");
            $(this).css("border","2px solid green");
            $(this).css("color","green");
            $(".signup").attr("disabled",false);
        }
    });

    $("input[name='pwd']").on("keyup", function() {
        let pwd = $(this).val();
        RegExp = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,12})/;
        if (RegExp.test(pwd)) {
            $("#error_pwd").html("");
            $("#error_pwd").css("color","green");
            $(this).css("border","2px solid green");
            $(this).css("color","green");
            $(".signup").attr("disabled",false);
        } else {
            $("#error_pwd").html("Password not valid.");
            $(this).css("color","red");
            $("#error_pwd").css("color","red");
            $(".signup").attr("disabled",true);
        }

    });
</script>
</html>