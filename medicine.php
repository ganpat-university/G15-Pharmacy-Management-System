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
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

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
                    <th class="w-6">Sr No</th>
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

                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="">
                        <img src="img/medicine.png" class="w-14 h-14">
                    </td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="">
                        <img src="img/medicine.png" class="w-14 h-14">
                    </td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="">
                        <img src="img/medicine.png" class="w-14 h-14">
                    </td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="">
                        <img src="img/medicine.png" class="w-14 h-14">
                    </td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="">
                        <img src="img/medicine.png" class="w-14 h-14">
                    </td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="">
                        <img src="img/medicine.png" class="w-14 h-14">
                    </td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="">
                        <img src="img/medicine.png" class="w-14 h-14">
                    </td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="">
                        <img src="img/medicine.png" class="w-14 h-14">
                    </td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="">
                        <img src="img/medicine.png" class="w-14 h-14">
                    </td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="">
                        <img src="img/medicine.png" class="w-14 h-14">
                    </td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="">
                        <img src="img/medicine.png" class="w-14 h-14">
                    </td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="">
                        <img src="img/medicine.png" class="w-14 h-14">
                    </td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td class="">
                        <img src="img/medicine.png" class="w-14 h-14">
                    </td>
                    <td>8</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>



<!-- drawer component -->
<div id="drawer-navigation" class="fixed z-40 h-screen p-4 overflow-y-auto bg-gray-200 w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
    <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu</h5>
    <button type="button" data-drawer-dismiss="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
  <div class="py-4 overflow-y-auto">
      <ul class="space-y-2">
         <li>
            <div class="li flex items-center bg-blue-500 border-l-4 border-black">
                <span class="ml-3 text-xl">Medicine</span>
            </div>
            <ul class="ml-8">
                <li class="bg-gray-300 rounded-sm">
                    <a href="#" class="flex items-center px-4 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span>View</span>
                    </a>
                </li>
                <li  class="bg-gray-300 rounded-sm border-2">
                    <a href="#" class="flex items-center px-4 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span>Edit</span>
                    </a>
                </li>
            </ul>
         </li>
      </ul>
      <ul class="space-y-2 mt-10">
         <li>
            <div class="li flex items-center bg-yellow-500 border-l-4 border-black">
                <span class="ml-3 text-xl">Category</span>
            </div>
            <ul class="ml-8">
                <li class="bg-gray-300 rounded-sm">
                    <a href="#" class="flex items-center px-4 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span>View</span>
                    </a>
                </li>
                <li  class="bg-gray-300 rounded-sm border-2">
                    <a href="#" class="flex items-center px-4 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span>Edit</span>
                    </a>
                </li>
            </ul>
         </li>
      </ul>
      <ul class="space-y-2 mt-10">
         <li>
            <div class="li flex items-center bg-green-500 border-l-4 border-black">
                <span class="ml-3 text-xl">Types</span>
            </div>
            <ul class="ml-8">
                <li class="bg-gray-300 rounded-sm">
                    <a href="#" class="flex items-center px-4 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span>View</span>
                    </a>
                </li>
                <li  class="bg-gray-300 rounded-sm border-2">
                    <a href="#" class="flex items-center px-4 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span>Edit</span>
                    </a>
                </li>
            </ul>
         </li>
      </ul>
   </div>
</div>
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