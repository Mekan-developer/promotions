<nav class="fixed top-0 left-0 z-[50] w-full border-b bg-gray-800 border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm rounded-lg sm:hidden  focus:outline-none focus:ring-2  text-gray-400 hover:bg-gray-700 focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                    </svg>
                </button>
                <a class="flex ms-2 md:me-24 text-white">
                    <img class="h-[46px] filter-custom-white"  
                     src="{{asset('assets/logo/arassa-nussga.png')}}" alt="arassa nusga logo">
                </a>
            </div>
            <div class="flex gap-6 items-center">
                {{-- for changing ode light mode --}}
                <x-mode-change />
                <x-lang-toggle />
                <div class="flex items-center  mr-12">
                    <div>
                        <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4  focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                        </button>
                    </div>
                    
                    <div class="z-50 min-w-[150px] hidden text-base list-none  divide-y  rounded shadow bg-gray-700 divide-gray-600" id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm  text-white" role="none">
                                {{auth()->user()->username}}
                            </p>
                            <p class="text-sm font-medium  truncate text-gray-300" role="none">
                                {{auth()->user()->email}}
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li >
                                <a href="{{route('profile.edit')}}" class="block px-4 py-2 text-sm  text-gray-300 hover:bg-gray-600 hover:text-white" role="menuitem">Profile</a>
                            </li>
                            <li>
                                <a wire:click="logOut" wire:navigate class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-600 hover:text-white cursor-pointer" role="menuitem">Sign out</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>