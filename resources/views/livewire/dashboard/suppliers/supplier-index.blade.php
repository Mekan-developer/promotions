<div class="w-full h-full flex justify-center items-center p-2 rounded-sm">
    <div class="relative bg-gray-200 dark:bg-gray-900 p-6 h-full rounded-sm overflow-x-auto w-full">
        <div  class="pb-4 flex justify-between">
            <x-dashboard.index-search />
            <a href="{{route('suppliers.create')}}" wire:navigate class=" active:scale-[0.75] text-white shadow-md bg-gray-400 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-sm text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 focus:scale-50">Add suplier</a>           
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 p-2 mb-8">
            <thead class="text-xs text-gray-700 uppercase bg-gray-400 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Address
                    </th>
                    @can('edit')
                        <th scope="col" class="px-6 py-3">
                            <span>Actions</span>
                        </th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                {{-- {{dd($suppliers)}} --}}
                @foreach ($suppliers as $key => $supplier)
                    <tr class="{{ (($key+1)%2 != 1) ? 'bg-white dark:bg-gray-800 hover:bg-gray-50 ' : '' }} dark:hover:bg-gray-600 border-b dark:border-gray-700" >
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$supplier->id}}
                        </th>
                        <th class="px-6 py-4">
                            {{$supplier->name}}
                        </th>
                        <td class="px-6 py-4">
                            {{$supplier->email}}
                        </td>
                        <td class="px-6 py-4">
                            {{$supplier->phone}}
                        </td>
                        <td class="px-6 py-4">
                            {{$supplier->address}}
                        </td>
                        @can('edit')
                            <td class="px-6 py-4 text-right inline-flex gap-6">
                                <a href="{{ route('suppliers.edit',['supplier' => $supplier->id]) }}" wire:navigate class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><x-heroicon-s-pencil-square class="size-6 hover:text-green-300" /></a>
                                @can('delete')
                                    <a wire:click="destroy({{$supplier->id}})" wire:confirm="Are you sure you want to delete this supplier?" class="cursor-pointer font-medium  text-blue-600 dark:text-blue-500 hover:underline"><x-heroicon-o-trash class="size-6 hover:text-red-400"/></a>
                                @endcan
                            </td>                        
                        @endcan
                    </tr>
                 @endforeach
            </tbody>
        </table>
        <span >
            {{ $suppliers->links() }}
        </span>
    </div>
</div>
