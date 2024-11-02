<div class="w-full h-full flex justify-center items-center p-2 rounded-sm">
    <div class="relative bg-white dark:bg-gray-900 p-6 h-full rounded-sm overflow-x-auto w-full">
        <div class="pb-4 flex justify-between">
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                    <div class="w-[40px] aspect-square text-gray-500 dark:text-gray-400"></div>
                </div>
                <div class="block pt-2 h-[40px] ps-10 text-sm text-gray-900 border border-gray-300 rounded-sm w-80 bg-gray-50 dark:bg-gray-700 animate-pulse"></div>
            </div>
            <div class="text-white shadow-md bg-gray-400 rounded-sm text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 animate-pulse"></div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 p-2">
            <thead class="text-xs text-gray-700 uppercase bg-gray-400 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Id</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Phone</th>
                    <th scope="col" class="px-6 py-3">Address</th>
                    <th scope="col" class="px-6 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 5; $i++)
                <tr class="{{ (($i+1)%2 != 1) ? 'bg-white dark:bg-gray-800 hover:bg-gray-50 ' : '' }} dark:hover:bg-gray-600 border-b dark:border-gray-700">
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white animate-pulse">
                        <div class="h-4 bg-gray-300 dark:bg-gray-600 rounded-sm"></div>
                    </td>
                    <td class="px-6 py-4 animate-pulse">
                        <div class="h-4 bg-gray-300 dark:bg-gray-600 rounded-sm"></div>
                    </td>
                    <td class="px-6 py-4 animate-pulse">
                        <div class="h-4 bg-gray-300 dark:bg-gray-600 rounded-sm"></div>
                    </td>
                    <td class="px-6 py-4 animate-pulse">
                        <div class="h-4 bg-gray-300 dark:bg-gray-600 rounded-sm"></div>
                    </td>
                    <td class="px-6 py-4 animate-pulse">
                        <div class="h-4 bg-gray-300 dark:bg-gray-600 rounded-sm"></div>
                    </td>
                    <td class="px-6 py-4 text-right inline-flex gap-6 animate-pulse">
                        <div class="h-6 w-6 bg-gray-300 dark:bg-gray-600 rounded-full"></div>
                        <div class="h-6 w-6 bg-gray-300 dark:bg-gray-600 rounded-full"></div>
                    </td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>
