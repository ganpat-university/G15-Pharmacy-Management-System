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
                    <a href="medicine.php" class="flex items-center px-4 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span>View</span>
                    </a>
                </li>
                <li  class="bg-gray-300 rounded-sm border-2">
                    <a href="medicineUpdate.php" class="flex items-center px-4 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
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