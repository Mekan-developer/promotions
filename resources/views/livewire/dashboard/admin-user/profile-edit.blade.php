<div class="w-full h-full flex justify-center items-center shadow-md sm:rounded-sm p-2">
    <div class="relative bg-white dark:bg-gray-900 p-4 h-full w-full overflow-x-auto" wire:loading.remove wire:target="save, cancel">
        <div class="overflow-y-auto overflow-hidden h-full">
            <div class="mb-2">
                <h1 class="block mb-2 uppercase font-medium text-gray-900 dark:text-gray-200">Edit User Profile</h1>
            </div>
            <form wire:submit.prevent="update" autocomplete="off">
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
                        <input type="email" wire:model.blur="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="user@example.com" required />
                        @error('email') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <div class="relative">
                            <input type="{{ $showPassword ? 'text' : 'password' }}" wire:model.blur="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter password"/>
                            <x-show-password-eye :showPassword="$showPassword" callFunctionName="togglePasswordVisibility" />
                        </div>
                        @error('password') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="w-full flex justify-end items-center gap-8">
                    <a href="{{ route('dashboard.home') }}" class="text-gray-900 dark:text-white cursor-pointer">Cancel</a>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                </div>
            </form>
        </div>
    </div>

    <x-loading targetName="save" />
    <x-loading targetName="cancel" />
</div>
