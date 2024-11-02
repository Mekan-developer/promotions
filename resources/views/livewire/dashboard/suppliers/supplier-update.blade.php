<div class="w-full h-full overflow-x-auto shadow-md sm:rounded-sm p-2">
    <div class="relative bg-white dark:bg-gray-900 p-4 h-full w-full">
        <div class="overflow-y-auto overflow-hidden h-full">
            <div class="mb-2">
                <h1 class="block mb-2 uppercase font-medium text-gray-900 dark:text-gray-200">{{ __('sidebar.suppliers.update') }}</h1>
            </div>
            <form wire:submit.prevent="save" autocomplete="off">
                <div class="grid gap-6 mb-6 md:grid-cols-1">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" wire:model.blur="name" autocomplete="off" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        @error('name') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                        <input type="text" wire:model.blur="address" autocomplete="off" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        @error('address') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
                        <input type="tel" autocomplete="off" wire:model.blur="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        @error('phone') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="email_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="text" wire:model.blur="email" autocomplete="off" id="email_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        @error('email') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>  
                    <div>
                        <label for="brands" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brands</label>
                        <textarea id="brands" wire:model.blur="brands" rows="4" autocomplete="off" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                    </div>
                </div>
                <div class="w-full flex justify-end items-center gap-8">
                    <a href="{{ route('suppliers.index') }}" class="text-white">Cancel</a>

                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
