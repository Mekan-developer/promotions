<div class="w-full flex justify-center items-center shadow-md sm:rounded-sm p-2">
    <div class="relative bg-white dark:bg-gray-900 p-4 h-full w-full overflow-x-auto" wire:loading.remove wire:target="save, cancel">
        <div class="overflow-y-auto overflow-hidden h-full">
            <div class="mb-2">
                <h1 class="block mb-2 uppercase font-medium text-gray-900 dark:text-gray-200">Create Administrator</h1>
            </div>
            <form wire:submit.prevent="save" autocomplete="off">
                <div class="grid gap-6 mb-6 md:grid-cols-1">
                    
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" wire:model.blur="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John Doe" required />
                        @error('name') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" wire:model.blur="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="username123" required />
                        @error('username') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" wire:model.blur="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="admin@example.com" required />
                        @error('email') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" wire:model.blur="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter password" required />
                        @error('password') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Roles</label>
                        <div class="flex gap-4">
                            <label wire:click="toggleRole('admin')" class="cursor-pointer">
                                <input type="radio" wire:model="roles" value="admin" class="hidden"/>
                                <span class="{{ ($role_is == 'admin') ? 'bg-blue-700 hover:bg-blue-800 text-white': 'hover:bg-gray-700 text-gray-900 dark:text-white border-gray-300  dark:border-gray-600' }} transition-all active:scale-[0.95] inline-block px-4 py-2 border rounded-md ">Admin</span>
                            </label>
                            
                            <label wire:click="toggleRole('editor')" class="cursor-pointer">
                                <input type="radio" wire:model="roles" value="editor" class="hidden"/>
                                <span class="{{ ($role_is == 'editor') ? 'bg-blue-700 hover:bg-blue-800 text-white': 'hover:bg-gray-700 text-gray-900 dark:text-white border-gray-300  dark:border-gray-600' }} transition-all active:scale-[0.95] inline-block px-4 py-2 border rounded-md ">Editor</span>
                            </label>
                            
                            <label wire:click="toggleRole('viewer')" class="cursor-pointer">
                                <input type="radio" wire:model="roles" value="viewer" class="hidden"/>
                                <span class="{{ ($role_is == 'viewer') ? 'bg-blue-700 hover:bg-blue-800 text-white': 'hover:bg-gray-700 text-gray-900 dark:text-white border-gray-300  dark:border-gray-600' }} transition-all active:scale-[0.95] inline-block px-4 py-2 border rounded-md ">Viewer</span>
                            </label>
                        </div>
                        @error('roles') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="w-full flex justify-end items-center gap-8">
                    <a href="{{ route('administrators.index') }}" class="text-gray-900 dark:text-white cursor-pointer">Cancel</a>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
                </div>
            </form>
        </div>
    </div>

    <x-loading targetName="save" />
    <x-loading targetName="cancel" />
</div>
