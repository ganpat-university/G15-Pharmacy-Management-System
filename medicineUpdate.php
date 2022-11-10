<?php
include 'session.php';
include 'db/db.php';
include 'function/function.php';
$managerId = $_SESSION['pharmacyid'];
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
    <link rel="stylesheet" type="text/css" href="css/medicineUpdate.css">
    <link rel="stylesheet" type="text/css" href="css/flowbite.min.css">
</head>
<body>
<?php include 'header.php';?>
<?php include 'navbar.php';?>
<?php

if (isset($_POST['medicineId'])) {
    $medicineId = get("medicineId");
    $medicineName = get("medicineName");
    $details = get("details");
    $price = get("price");
    $category = get("category");
    $medicineType = get("medicineType");
    $status = get("status");
    $strength = get("strength");
    
    if (!empty($_FILES["img"]["name"])) {
        $fileName = basename($_FILES["img"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $img = $_FILES['img']['tmp_name'];
        $imgContent = addslashes(file_get_contents($img));
    }
    update("product", "id=$medicineId", array($medicineName, $details, $price, $category, $medicineType, $status, $strength, $imgContent), array("medicineName", "details", "unitCost", "category", "medicineType", "status", "strength", "medicineImage"));
}
?>

<div class="container mx-auto pt-24">
    <div class="menu max-w-auto border-b-4 border-blue-700 rounded-l-xl mb-4">
        <div class="flex">
            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-l-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                <svg viewBox="0 0 100 80" width="20" height="20">
                    <rect width="60" height="10"></rect>
                    <rect y="30" width="80" height="10"></rect>
                    <rect y="60" width="100" height="10"></rect>
                </svg>
            </button>
            <p class="head pt-1 pl-6 text-2xl">Edit Medicine</p>
        </div>
    </div>
    <div class="cardform w-full justify-center bg-gray-100 p-6 shadow-xl shadow-gray-900 rounded">
        <p class="error text-white mx-48 text-center bg-red-500 rounded"></p>
        <form method="post" enctype="multipart/form-data">
            <table class="w-full table">
                <tr>
                    <td class="label">Medicine ID</td>
                        <td><input type="text" id="medicineId" name="medicineId" value="" required></td>
                    <td class="label">Medicine Name</td>
                        <td><input type="text" id="medicineName" name="medicineName" value="" required></td>
                </tr>
                <tr>
                    <td class="label">Generic Name</td>
                        <td><input type="text" id="genName" name="genName" value="" class="text-gray-500" required disabled></td>
                    <td class="label">Medicine Details</td>
                        <td><textarea type="text" id="details" name="details" value=""></textarea>
                </tr>
                <tr>
                    <td class="label">Price</td>
                        <td><input type="text" id="price" name="price" value="" required></td>
                    <td class="label">Category</td>
                        <td>
                            <select name="category" id="category" required>
                                <option value="Tablet">Tablet</option>
                                <option value="Capsule">Capsule</option>
                                <option value="Syrup">Syrup</option>
                                <option value="Injection">Injection</option>
                                <option value="Cream">Cream</option>
                                <option value="Gel">Gel</option>
                                <option value="Drop" class="Drop">Drop</option>
                                <option value="Powder">Powder</option>
                                <option value="Antibiotic Eyedrops">Antibiotic Eyedrops</option>
                            </select>
                        </td>
                </tr>
                <tr>
                    <td class="label">Medicine Type</td>
                        <td>
                            <select name="medicineType" id="medicineType">
                                <option value="Tablet">Pain Killer</option>
                                <option value="Capsule">Suspension</option>
                                <option value="Syrup">Heart Disease</option>
                            </select>
                        </td>
                    <td class="label">Status</td>
                        <td>
                            <input on type="radio" name="status" id="active" value="active" class="radio"><label for="active" class="">Active</label>
                            <input type="radio" name="status" id="inactive" value="inactive"><label for="inactive">Inactive</label>
                        </td>
                </tr>
                <tr>
                    <td class="label">Image</td>
                        <td class="img">
                            <input type="file" name="img" accept=".jpg,.jpeg,.png,.gif" id="getFileImg">
                            <img src="img/medicine.png" id="logoImg" class="w-36 my-4">
                        </td>
                    <td class="label">Strength</td>
                        <td><input type="text" id="strength" name="strength" value="" required></td>
                </tr>
                <tr>
                    <td colspan="4"><button class="submit" type="submit" name="submit">Add</button></td>
                </tr>

            </table>
        </form>
    </div>
</div>
<?php include 'menu.php'; ?>
</body>
<script>
getFileImg.onchange = evt => {
    const [file] = getFileImg.files
    if (file) {
        logoImg.src = URL.createObjectURL(file)
    }
}

$("#medicineName").change(function(){
    let medicineName = $(this).val();
    console.log(medicineName);
    let array = []
    $.ajax({
        url: "insertMedicine.php",
        type: "POST",
        data: {medicineName:medicineName},
        success: function(data){
            // console.log(data);
            array = data.split(",");
            console.log(array.length);
            if(array.length > 1){
                $(".error").html("");
                $("#genName").val(array[1]);
                $("#category").val(array[2]);
                $("#strength").val(array[3]);
                $("#price").val(array[4]);
                $("#logoImg").attr("src","data:image/jpeg;base64,"+array[5]);
                if(array[6] == "inactive"){ $("#inactive").prop("checked",true);}
                else{ $("#active").prop("checked",true);}
                $("#medicineId").val(array[7]);
                $("#details").val(array[8]);
                $("#medicineType").val(array[9]);
            } else {
                $("error").html("Medicine Not Found");
            }
        }
    });
});
$("#medicineId").change(function(){
    let medicineId = $(this).val();
    console.log(medicineId);
    let array = []
    $.ajax({
        url: "insertMedicine.php",
        type: "POST",
        data: {medicineId:medicineId},
        success: function(data){
            console.log(data);
            array = data.split(",");
            if (array.length > 1){
                $(".error").html("");
                $("#medicineName").val(array[0]);
                $("#genName").val(array[1]);
                $("#category").val(array[2]);
                $("#strength").val(array[3]);
                $("#price").val(array[4]);
                $("#logoImg").attr("src","data:image/jpeg;base64,"+array[5]);
                if(array[6] == "inactive"){ $("#inactive").prop("checked",true);}
                else{ $("#active").prop("checked",true);}
                $("#details").val(array[8]);
                $("#medicineType").val(array[9]);
            } else {
                $(".error").html("Medicine Not Found");
            }
        }
    });
});

</script>
</html>