<div class="w-full px-4"> 
    @if (session()->has('alert-message'))    
        <div id="alert-message" class="dark:bg-yellow-300  text-gray-600 alert w-full h-[50px] mt-4 flex items-center px-4 py-1 rounded-md shadow-md" role="alert">
            <span class="flex-grow">{{ session('alert-message') }}</span>
            <button type="button" class="ml-4 -mt-1 text-gray-600 text-[32px]" onclick="document.getElementById('alert-message').remove()">
                &times;
            </button>
        </div>
    @endif
</div>