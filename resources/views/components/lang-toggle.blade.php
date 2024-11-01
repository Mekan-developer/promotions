<div>
    @php($languages = ['ru' => 'Russian', 'tm' => 'Turkmen'])
    <div data-lazy="true" class="main-container" x-data="{open:false}">
        <!-- Your main content here -->
        <button type="button" x-on:click="open = !open" class="w-[154px] inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-white rounded-lg cursor-pointer hover:bg-gray-100 hover:bg-gray-700 hover:text-white">
            <img src="{{asset('flags/'.app()->getLocale().'-flag.png')}}" alt="english"  class="h-6 aspect-square rounded-full me-2">
            {{ $languages[app()->getLocale()] }} <span class="uppercase ml-1"> ({{app()->getLocale()}}) </span> 
        </button>
        <!-- Dropdown -->
        <div x-show="open" x-on:click.outside="open = false" class="absolute z-50  my-4 text-base list-none  divide-y divide-gray-100 rounded-lg shadow bg-gray-700" id="language-dropdown-menu">
            <ul class="py-2 font-medium" role="none">
                <li>
                    <a href="{{route('change.lang', ['lang' => 'ru'])}}" wire:navigate class="block px-4 py-2 text-sm text-gray-400 hover:bg-gray-600 hover:text-white" role="menuitem">
                        <div class="inline-flex items-center">
                        <img src="{{asset('flags/ru-flag.png')}}" alt="russian"  class="h-6 aspect-square rounded-full me-2">
                        Русский (RU)
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{route('change.lang', ['lang' => 'tm'])}}" wire:navigate class="block px-4 py-2 text-sm text-gray-400 hover:bg-gray-600 hover:text-white" role="menuitem">
                        <div class="inline-flex items-center">
                        <img src="{{asset('flags/tm-flag.png')}}" alt="russian"  class="h-6 aspect-square rounded-full me-2">
                        Türkmen (TM)
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>