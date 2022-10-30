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
</head>
<body>
<?php include 'header.php';?>
<?php include 'navbar.php';?>
<div class="container mx-auto pt-24">
    <div class="cardform w-full justify-center bg-gray-100 p-6 shadow-xl shadow-gray-900 rounded">
        <div class="col1 mb-4 py-2 pl-4 border-b-2 text-xl border-gray-500">
            Add Medicine
        </div>
        <form action="medicineUpdate.php" method="post">
            <table class="w-full table">
                <tr>
                    <td class="label">Medicine ID</td>
                        <td><input type="text" name="medicineID" value=""></td>
                    <td class="label">Medicine Name</td>
                        <td><input type="text" name="medicineID" value=""></td>
                </tr>
                <tr>
                    <td class="label">Generic Name</td>
                        <td><input type="text" name="medicineID" value=""></td>
                    <td class="label">Medicine Details</td>
                        <td><textarea type="text" name="medicineID" value=""></textarea>
                </tr>
                <tr>
                    <td class="label">Price</td>
                        <td><input type="text" name="medicineID" value=""></td>
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
                            <input type="radio" name="medicineID" id="active" value="" class="radio"><label for="active" class="">Active</label>
                            <input type="radio" name="medicineID" id="inactive" value=""><label for="inactive">Inactive</label>
                        </td>
                </tr>
                <tr>
                    <td class="label">Image</td>
                        <td class="img">
                            <input type="file" name="medicineID" accept=".jpg,.jpeg,.png,.gif" id="getFileImg" value="">
                            <img src="img/medicine.png" id="logoImg" class="w-24">
                        </td>
                    <td class="label">Strength</td>
                        <td><input type="text" name="medicineID" value=""></td>
                </tr>
                <tr>
                    <td colspan="4"><button class="submit" type="submit" name="submit">Add</button></td>
                </tr>

            </table>
        </form>
    </div>
</div>
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