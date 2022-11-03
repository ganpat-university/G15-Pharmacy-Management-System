<head><link rel="stylesheet" type="text/css" href="css/mail.css"></head>
<div class="mail z-30 right-3 bottom-3 p-2 w-14 h-14 hover:bg-gray-300 bg-gray-200 rounded-2xl fixed">
    <img src="img/mail.png" alt="mail" class="mailicon">
</div>
<div class="mailbody z-20 right-0 bottom-3 p-2 w-4/12 h-96 text-sm bg-gray-200 rounded-l-2xl overflow-y-scroll hidden fixed">
    <div class="notification p-2 my-1 w-10/12 bg-white border-l-4 border-gray-900 rounded-r-2xl">
        <div class="head">Admin</div>
        <div class="body grid grid-cols-2 text-xs">
            <p>stock deliverd</p>
            <p class="flex justify-self-end">20 Jan 2022</p>
        </div>
    </div>
    <div class="notification p-2 my-1 w-10/12 ml-16 bg-white border-r-4 border-gray-900 rounded-l-2xl">
        <div class="head text-right">System</div>
        <div class="body grid grid-cols-2 text-xs">
            <p>20 Jan 2022</p>
            <p class="flex justify-self-end">Request For Stock</p>
        </div>
    </div>
</div>
<script>
    $(document).on("click",".mail",function(){
        $(".mailbody").toggleClass('hidden');
    });
</script>
