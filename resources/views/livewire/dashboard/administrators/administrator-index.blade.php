<div class="w-full p-2 rounded-sm">
    <div class="relative bg-white dark:bg-gray-900 p-6 h-full rounded-sm overflow-x-auto w-full">
        <div class="pb-4 flex justify-between">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="text" wire:model.live.debounce.2000ms='search' id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-sm w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
            </div> 
            <a href="{{ route('administrator.create') }}" class="text-white shadow-md bg-gray-400 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-sm text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Add User</a>           
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 p-2">
            <thead class="text-xs text-gray-700 uppercase bg-gray-400 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Id</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Username</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Role</th>
                    <th scope="col" class="px-6 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $user)
                    <tr class="{{ (($key + 1) % 2 != 1) ? 'bg-white dark:bg-gray-800 hover:bg-gray-50' : '' }} dark:hover:bg-gray-600 border-b dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $user->id }}</td>
                        <td class="px-6 py-4">{{ $user->name }}</td>
                        <td class="px-6 py-4">{{ $user->username }}</td>
                        <td class="px-6 py-4">{{ $user->email }}</td>
                        <td class="px-6 py-4">{{ $user->role }}</td>
                        <td class="px-6 py-4 text-right inline-flex gap-6">
                            <a href="{{ route('administrator.edit', ['user' => $user->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <x-heroicon-s-pencil-square class="size-6 hover:text-green-300" />
                            </a>
                            <a wire:click="destroy({{ $user->id }})" wire:confirm="Are you sure you want to delete this user?" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <x-heroicon-o-trash class="size-6 hover:text-red-400"/>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
