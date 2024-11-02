<div class="w-full h-full flex justify-center items-center  shadow-md sm:rounded-sm p-2">
    <x-error/> 
    <div class="relative bg-white dark:bg-gray-900 p-4 h-full w-full overflow-x-auto" wire:loading.remove wire:target='save, cancel'>
        <div class="overflow-y-auto overflow-hidden h-full" >
            <div class="mb-2">
                <h1 class="block mb-2 uppercase font-medium text-gray-900 dark:text-gray-200">Create Item</h1>
            </div>
            <form wire:submit.prevent="save" autocomplete="off">
                <div class="grid gap-6 mb-6 md:grid-cols-1">
                    <div>
                        <label for="supplier_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supplier</label>
                        <select wire:model.blur="supplier_id" id="supplier_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="">Select a Supplier</option> 
                            @foreach($suppliers as $supplier)
                                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                            @endforeach
                        </select>
                        @error('supplier_id') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>
                    

                    <div>
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" wire:model.blur="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter title" required />
                        @error('title') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>
                    
                    <div>
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea wire:model.blur="description" id="description" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter description"></textarea>
                        @error('description') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>
                    
                    <div id="date-range-picker" class="flex items-center bg-white border border-gray-300 p-4 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-600">
                        <div class="flex-1 flex-col">
                            <div class=" flex items-center">
                                <span class="mx-4 text-gray-700 dark:text-gray-300">From:</span>
                                <div class="relative flex-1">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-blue-500 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                    </div>
                                    <input id="datepicker-range-start" type="text" wire:model.lazy="start_date" class="bg-blue-50 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full pl-10 p-2.5 placeholder-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select start date">
                                </div>
                            </div>
                            <div class="h-[20px]">
                                @error('start_date') <span class="error text-red-600">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="flex-1 flex-col">
                            <div class=" flex items-center">
                                <span class="mx-4 text-gray-700 dark:text-gray-300">To:</span>
                                <div class="relative flex-1">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-blue-500 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                    </div>
                                    <input id="datepicker-range-end" type="text" wire:model.lazy="end_date" class="bg-blue-50 border border-blue-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full pl-10 p-2.5 placeholder-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select end date">
                                </div>
                            </div>
                            <div class="h-[20px]">
                                @error('end_date') <span class="error text-red-600">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="number" wire:model.blur="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter price" required />
                        @error('price') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>
                    
                    <div>
                        <label for="discount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discount (%)</label>
                        <input type="number" wire:model.blur="discount" id="discount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter discount" />
                        @error('discount') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>
                </div>
                
                <div class="w-full flex justify-end items-center gap-8">
                    <span wire:click='cancel' class="text-gray-900 dark:text-white cursor-pointer">Cancel</span>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
                </div>
            </form>
        </div>
    </div>

    <x-loading targetName="save" />
    <x-loading targetName="cancel" />
</div>
