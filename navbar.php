<div class="bg-green-900 fixed w-full shadow-2xl z-10">
    <div class="container mx-auto">
        <div class="w-full text-gray-700 bg-green-900 dark-mode:text-gray-200 dark-mode:bg-gray-800">
            <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 relative">
                <div class="flex flex-row items-center justify-between p-1">
                    <a href="index.php" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline grid:1">
                        <img src="img/logo-dark-removebg.png" alt="Logo" class="h-14">
                    </a>
                    <div><p class="pl-2 text-green-200 font-medium text-lg">Pharmacy Management System</p></div>
                </div>
                
                <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
                    <a id='ind' class="px-3 py-2 mt-2 text-sm md:mt-0 md:ml-3 text-white hover:text-gray-400 focus:outline-none" href="home.php">Home</a>
                    <a id='ava' class="px-3 py-2 mt-2 text-sm md:mt-0 md:ml-3 text-white hover:text-gray-400 focus:outline-none" href="stock.php">Stock</a>
                    <a id='hel' class="px-3 py-2 mt-2 text-sm md:mt-0 md:ml-3 text-white hover:text-gray-400 focus:outline-none" href="purchase.php">Purchase</a>
                    <a id='cus' class="px-3 py-2 mt-2 text-sm md:mt-0 md:ml-3 text-white hover:text-gray-400 focus:outline-none" href="customer.php">Customer</a>
                </nav>

                <div @click.away="open = false" class="absolute right-6 mt-4 md:mt-0 md:right-0 md:relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full text-sm text-left bg-transparent md:w-auto md:inline md:mt-0 md:ml-4 text-white hover:text-gray-900 focus:outline-none">
                        <div class="flex items-center group">
                            <span class="flex items-center justify-center bg-gray-200 text-gray-700 text-sm h-10 w-10 rounded-full border-2 border-gray-300 group-hover:border-gray-600">
                                <!-- <img class="object-cover w-9 h-9 md:w-9 md:h-9 md:rounded-full" src="data:image/jpg;charset=utf8;base64"> -->
                                <img class="object-cover w-9 h-9 md:w-9 md:h-9 md:rounded-full" src="img/customer.png">
                            </span>
                        </div>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 w-56 mt-2 origin-top-right rounded-md shadow-lg md:w-60 z-30">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-700">
                            <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg  md:mt-0 text-gray-900 hover:bg-gray-200 focus:outline-none" href="account_setting.php">
                                <i class="fa-solid fa-user-large mr-2"></i> 
                                Account Settings
                            </a>
                            <div class="border-t border-gray-300 mt-2 pt-2 block">
                                <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-0 text-gray-900 hover:bg-gray-200 focus:outline-none" href="logout.php">
                                    <i class="fa-solid fa-arrow-right-from-bracket mr-2"></i>
                                    Logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>