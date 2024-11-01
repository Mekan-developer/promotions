<div>
    @props([
        'title' => 'SomeLink',
        'icon' => '',
        'activeLink' => false,
        'link' => ''
        ])
    <li>
        <a href="{{ route($link) }}" wire:navigate class="{{ $activeLink ? 'bg-gray-100 text-gray-900 hover:text-white' : ' text-white hover:bg-gray-100 ' }} flex items-center rounded-lg hover:bg-gray-700 p-2 group">

            @switch($icon)
                @case('chart-pie')
                    <x-heroicon-s-chart-pie class="flex-shrink-0 w-6 h-6  transition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" fill="currentColor" />
                    @break

                @case('user-group')
                    <x-heroicon-s-user-group  class="flex-shrink-0 w-6 h-6  transition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" fill="currentColor" />
                    @break

                @case('star')
                    <x-heroicon-s-star class="flex-shrink-0 w-6 h-6  transition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" fill="currentColor" />
                    @break

                @case('c-user-plus')
                    <x-heroicon-c-user-plus class="flex-shrink-0 w-6 h-6  transition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" fill="currentColor" />
                    @break

                @case('shield-check')
                    <x-heroicon-s-shield-check class="flex-shrink-0 w-6 h-6  transition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" fill="currentColor" />
                    @break

                <!-- Optionally handle a default case -->
                @default
                    <x-heroicon-s-question-mark-circle class="flex-shrink-0 w-6 h-6  transition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" fill="currentColor" />
            @endswitch
            <span class="ms-3">{{ $title }}</span>
        </a>
    </li>
    
</div>
