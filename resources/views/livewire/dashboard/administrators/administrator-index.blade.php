<div class="w-full h-full p-2 rounded-sm">
    <div class="relative bg-gray-200 dark:bg-gray-900 p-6 h-full rounded-sm overflow-x-auto w-full">
        <div class="pb-4 flex justify-between">
            <x-dashboard.index-search />
            <a href="{{ route('administrators.create') }}" class="text-white shadow-md bg-gray-400 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-sm text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 active:scale-[0.75]">Add User</a>           
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 p-2 mb-8">
            <thead class="text-xs text-gray-700 uppercase bg-gray-400 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Id</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Username</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Role</th>
                    @can('edit')
                        <th scope="col" class="px-6 py-3">Actions</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $user)
                    <tr  class="{{ (($key+1)%2 != 1) ? 'bg-white dark:bg-gray-800 hover:bg-gray-50 ' : '' }} dark:hover:bg-gray-600 border-b dark:border-gray-700" >
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $user->id }}</td>
                        <td class="px-6 py-4">{{ $user->name }}</td>
                        <td class="px-6 py-4">{{ $user->username }}</td>
                        <td class="px-6 py-4">{{ $user->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{  $user->roles->pluck('name')->first() }}</td>
                        @can('edit')
                            <td class="px-6 py-4 text-right inline-flex gap-6">
                                <a href="{{ route('administrators.edit', ['user' => $user->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><x-heroicon-s-pencil-square class="size-6 hover:text-green-300" /></a>
                                @can('delete')
                                    <a wire:click="destroy({{ $user->id }})" wire:confirm="Are you sure you want to delete this user?" class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <x-heroicon-o-trash class="size-6 hover:text-red-400"/>
                                    </a>
                                @endcan
                            </td>
                        @endcan
                    </tr>
                @endforeach
            </tbody>
        </table>
        <span>
            {{ $users->links() }}
        </span>
    </div>
</div>
