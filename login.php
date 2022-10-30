<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome back to Pharmacy Management System. Log in to your account here</title>
    <link rel="icon" href="img/logo-dark-removebg.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <h1 class="text-4xl text-center weight-100 mt-14 ml-14 font-bold heading">Welcome back to<br> <a class="title">Pharmacy Management System</a></h1>
    <div class="p-16 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-5">
        <!--Card 1-->
        <div class="card1">
            <div class="rounded form">
                <div class="px-4 py-4 f">
                    <p class="text-gray-700 text-base">
                    <p id="login_error"></p>
                    <form action="login_verification.php" method="post">
                    <div class="user">
                        <i class="fa-solid fa-envelope"></i>
                        <input class="w-96 rounded-lg shadow-xl border border-gray-400 h-16 pl-10" placeholder="Enter Your Email" name="email" type="text" required><br><br>
                        <i class="fa-solid fa-lock"></i>
                        <input class="w-96 rounded-lg shadow-xl border border-gray-400 h-16 pl-10" placeholder="Enter Your Password" name="pwd" type="password" required><br><br>
                        <div class="log w-96">
                            <p id="button" class="button w-24 text-white p-3 pl-6 rounded-lg h-12">Log in</p>
                        </div>
                    </div>
                    </form>

                    <br><br>
                    <div class="text-base lg:-mt-4 lg:-ml-4"><p class="ml-5">Don't have an account? <a href="signup.php" class="text-blue-700">Sign Up</a></p>
                    </div>
                    </p>
                </div>
            </div>
        </div>
        

        <!--Card 2-->
        <div class="rounded overflow-hidden form2">
            <div class="px-6 py-4">
                <div class="inline-block bg-gray-100 rounded-lg px-3 py-1 text-sm font-semibold text-blue-700 mr-2 mb-2">
                    <p class="msg">Heyyyyyyy Pharmacist . . . </p>
                </div> <br><br>
                <p class="card2-p">The pharmacy management system serves many purposes, including the safe and effective dispensing of pharmaceutical drugs. During the dispensing process, the system will prompt the pharmacist to verify the medication they have filled is for the correct patient, contains the right quantity and dosage, and displays accurate information on the prescription label.</p>
                </p>
            </div>
        </div>
    </div>
</body>

<script>
    var marginSet=0, temp=0;
    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
    var email = $("input[name='email']").val();
    var pwd = $("input[name='pwd']").val();
    $("input[name='email']").on("keyup", function() {
        email = $(this).val();
        if (isEmail(email) && temp == 0) {
            $("input[name='email']").css("border", "2px solid green");
            if (pwd.length >= 8) {
                $(".log").append("<button type='submit' class='w-24 text-white rounded-lg h-12'>Log in</button>"); 
                $("#button").attr("hidden", true);

            }
        } else {
            $("#button").attr("hidden", false);
            $("input[name='email']").css("border", "2px solid red");
            $("button").attr("hidden", true);
            temp = 0;
        }
    });

    $("input[name='pwd']").on("keyup", function() {
        pwd = $(this).val();
        if (pwd.length >= 8) {
            $("input[name='pwd']").css("border", "2px solid green");
            if (isEmail(email) && temp == 0) {
                $(".log").append("<button type='submit' class='w-24 text-white rounded-lg h-12'>Log in</button>");
                $("#button").attr("hidden", true);
                temp = 1;
            }
        } else {
            $("#button").attr("hidden", false);
            $("input[name='pwd']").css("border", "2px solid red");
            $("button").attr("hidden", true);
            temp = 0;
        }
    });

    $("#button").mouseenter(function(){
        if ($(this).css("margin-left") < "10px"){
            marginSet = "50%";
            $(this).css("margin-left","74%");
        } else {
            marginSet = "0%";
            $(this).css("margin-left","0%");
        }
    });

    
</script>

</html>