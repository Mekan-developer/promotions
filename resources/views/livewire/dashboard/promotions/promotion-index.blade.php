<div class="w-full h-full p-2 rounded-sm">
    <div class="relative bg-gray-200 dark:bg-gray-900 p-6 h-full rounded-sm overflow-x-auto w-full">
        <div  class="pb-4 flex justify-between">
            <x-dashboard.index-search />
            <a href="{{route('promotions.create')}}" wire:navigate class="active:scale-[0.75] text-white shadow-md bg-gray-400 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-sm text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Add promotion</a>           
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 p-2 mb-8">
            <thead class="text-xs text-gray-700 uppercase bg-gray-400 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Supplier
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Discount(%)
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Start date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        End date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    @can('edit')
                        <th scope="col" class="px-6 py-3">
                            <span>Actions</span>
                        </th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach ($promotions as $key => $promotion)
                    <tr class="{{ (($key+1)%2 != 1) ? 'bg-white dark:bg-gray-800 hover:bg-gray-50 ' : '' }} dark:hover:bg-gray-600 border-b dark:border-gray-700" >
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$promotion->id}}
                        </th>
                        <th class="px-6 py-4">
                            {{$promotion->title}}
                        </th>
                        <td class="px-6 py-4">
                            {{$promotion->description}}
                        </td>
                        <td class="px-6 py-4">
                            {{$promotion->supplier->name}}
                        </td>
                        <td class="px-6 py-4">
                            {{$promotion->price}}
                        </td>
                        <td class="px-6 py-4">
                            {{$promotion->discount}}
                        </td>

                        <td class="px-6 py-4">
                            {{$promotion->start_date}}
                        </td>
                        <td class="px-6 py-4">
                            {{$promotion->end_date}}
                        </td>
                        <td class="px-6 py-4">
                            <label class="inline-flex items-center me-5 cursor-pointer">
                                <input type="checkbox" wire:click="changeStatus({{$promotion->id}})" class="sr-only peer" {{ $promotion->status ? 'checked': '' }}>
                                <div class="relative w-11 h-6 bg-red-200 rounded-full peer dark:bg-red-700 peer-checked:after:translate-x-full  peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600"></div>
                            </label>

                        </td>
                        @can('edit')
                            <td class="px-6 py-4 text-right inline-flex gap-6">
                                <a href="{{ route('promotions.edit',['promotion' => $promotion->id]) }}" wire:navigate class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><x-heroicon-s-pencil-square class="size-6 hover:text-green-300" /></a>
                                @can('delete')
                                    <a wire:click="destroy({{$promotion->id}})" wire:confirm="Are you sure you want to delete this promotion?" class="font-medium  text-blue-600 dark:text-blue-500 hover:underline cursor-pointer"><x-heroicon-o-trash class="size-6 hover:text-red-400"/></a>
                                @endcan
                            </td>                        
                        @endcan
                    </tr>
                 @endforeach
            </tbody>
        </table>
        <span>
            {{ $promotions->links() }}
        </span>
    </div>
</div>
