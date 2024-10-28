<div>
    @props([
        'title' => 'SomeLink',
        'icon'
        ])
    <li>
        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

            @switch($icon)
                @case('chart-pie')
                    <x-heroicon-s-chart-pie class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" fill="currentColor" />
                    @break

                @case('squares-2x2')
                    <x-heroicon-s-squares-2x2 class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" fill="currentColor" />
                    @break

                @case('star')
                    <x-heroicon-s-star class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" fill="currentColor" />
                    @break

                @case('c-user-plus')
                    <x-heroicon-c-user-plus class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" fill="currentColor" />
                    @break

                @case('shield-check')
                    <x-heroicon-s-shield-check class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" fill="currentColor" />
                    @break

                <!-- Optionally handle a default case -->
                @default
                    <x-heroicon-s-question-mark-circle class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" fill="currentColor" />
            @endswitch
            <span class="ms-3">{{ $title }}</span>
        </a>
    </li>
    
</div>
