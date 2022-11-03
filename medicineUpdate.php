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
            <p class="head pt-1 pl-6 text-2xl">Add Medicine</p>
        </div>
    </div>
    <div class="cardform w-full justify-center bg-gray-100 p-6 shadow-xl shadow-gray-900 rounded">
        <form action="insertMedicine.php" method="post" enctype="multipart/form-data">
            <table class="w-full table">
                <tr>
                    <td class="label">Medicine ID</td>
                        <td><input type="text" name="medicineID" value=""></td>
                    <td class="label">Medicine Name</td>
                        <td><input type="text" name="medicineName" value=""></td>
                </tr>
                <tr>
                    <td class="label">Generic Name</td>
                        <td><input type="text" name="genName" value=""></td>
                    <td class="label">Medicine Details</td>
                        <td><textarea type="text" name="details" value=""></textarea>
                </tr>
                <tr>
                    <td class="label">Price</td>
                        <td><input type="text" name="price" value=""></td>
                    <td class="label">Category</td>
                        <td>
                            <select name="category" id="category">
                                <option value="Tablet">Tablet</option>
                                <option value="Capsule">Capsule</option>
                                <option value="Syrup">Syrup</option>
                                <option value="Injection">Injection</option>
                                <option value="Cream">Cream</option>
                                <option value="Gel">Gel</option>
                                <option value="Drops">Drops</option>
                                <option value="Powder">Powder</option>
                                <option value="Other">Other</option>
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
                            <input type="radio" name="status" id="active" value="active" class="radio"><label for="active" class="">Active</label>
                            <input type="radio" name="status" id="inactive" value="inactive"><label for="inactive">Inactive</label>
                        </td>
                </tr>
                <tr>
                    <td class="label">Image</td>
                        <td class="img">
                            <input type="file" name="img" accept=".jpg,.jpeg,.png,.gif" id="getFileImg">
                            <img src="img/medicine.png" id="logoImg" class="w-24">
                        </td>
                    <td class="label">Strength</td>
                        <td><input type="text" name="strength" value=""></td>
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
</script>
</html>