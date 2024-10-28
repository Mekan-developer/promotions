<div>
    @props([
        'strength',
        'rules'
    ])
    
    <div data-popover id="popover_password" role="tooltip" class="absolute z-10 inline-block text-sm text-gray-500 bg-white border border-gray-200 rounded-lg shadow-sm w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
        <div class="p-3 space-y-2">
            <h3 class="font-semibold text-gray-900 dark:text-white">Must have at least 6 characters</h3>
            <div class="grid grid-cols-4 gap-2">
                <div class="h-1 {{ $strength >= 1 ? 'bg-orange-400' : 'bg-gray-200' }}"></div>
                <div class="h-1 {{ $strength >= 2 ? 'bg-orange-400' : 'bg-gray-200' }}"></div>
                <div class="h-1 {{ $strength >= 3 ? 'bg-orange-400' : 'bg-gray-200' }}"></div>
                <div class="h-1 {{ $strength >= 4 ? 'bg-orange-400' : 'bg-gray-200' }}"></div>
            </div>
    
            <p>It’s better to have:</p>
            <ul>
                <li class="flex items-center mb-1">
                    <svg class="w-3.5 h-3.5 me-2 {{ $rules['upper_case'] ? 'text-green-400' : 'text-gray-300' }}" aria-hidden="true">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    Upper case letters
                </li>
                <li class="flex items-center mb-1">
                    <svg class="w-3.5 h-3.5 me-2 {{ $rules['lower_case'] ? 'text-green-400' : 'text-gray-300' }}" aria-hidden="true">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    Lower case letters
                </li>
                <li class="flex items-center mb-1">
                    <svg class="w-3.5 h-3.5 me-2 {{ $rules['symbol'] ? 'text-green-400' : 'text-gray-300' }}" aria-hidden="true">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    A symbol (#$&)
                </li>
                <li class="flex items-center">
                    <svg class="w-3.5 h-3.5 me-2 {{ $rules['length'] ? 'text-green-400' : 'text-gray-300' }}" aria-hidden="true">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    A longer password (min. 6 chars.)
                </li>
            </ul>
        </div>
        <div data-popper-arrow></div>
    </div> 
</div>