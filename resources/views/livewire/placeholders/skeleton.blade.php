
<div role="status" class="flex flex-col w-full space-y-8 animate-pulse md:space-y-0 md:space-x-8 rtl:space-x-reverse md:flex md:items-center pt-[150px]">

    <div class="w-full fixed z-20 top-0 start-0">        
        <div class="h-[80px] bg-gray-200 rounded-sm dark:bg-gray-700 w-full"></div>
    </div>
 
    <div class="grid grid-cols-2 gap-12 justify-center pb-4">
        @for ($i = 0; $i < 10; $i++)
            <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 animate-pulse">
                <div class="w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg bg-gray-300 dark:bg-gray-700"></div>
                <div class="flex flex-col justify-between p-4 leading-normal w-full">
                    <div class="h-6 bg-gray-300 rounded mb-2 w-3/4 dark:bg-gray-600"></div>
                    <div class="h-4 bg-gray-300 rounded mb-3 w-full dark:bg-gray-600"></div>
                    <div class="h-4 bg-gray-300 rounded w-5/6 dark:bg-gray-600"></div>
                </div>
            </div> 
        @endfor        
    </div>
    
    <span class="sr-only">Loading...</span>
</div>

