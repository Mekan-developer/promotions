<div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex items-center justify-center relative">
    <x-error/>        
    <div class="w-full max-w-md" wire:loading.remove wire:target='submitLogin'>
        <div class="bg-white dark:bg-gray-800 rounded-md shadow-md p-6 ">
            
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 text-center mb-6">{{__('auth.login')}}</h2>
                <form wire:keydown.enter="submitLogin" class="form">                
                    <div class="mb-4">
                        <label for="login" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{__('auth.username')}}/{{__('auth.email')}}</label>
                        <input type="text" wire:model.blur="username" id="login"  autocomplete="off"
                            class="w-full p-3 bg-gray-50 dark:bg-gray-700 border dark:text-gray-300 border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-300">
                        @error('username') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{__('auth.auth_password')}}</label>
                        <div class="relative">
                            <input type="{{ $showPassword ? 'text' : 'password' }}" wire:model.blur="password" id="password" autocomplete="off"
                            class="w-full p-3 bg-gray-50 dark:bg-gray-700 border dark:text-gray-300 border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-300">
                            <x-show-password-eye showPassword={{$showPassword}} callFunctionName="togglePasswordVisibility" />
                        </div>
                        @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center">
                            <input checked id="checked-checkbox" wire:model='remember' type="checkbox" value="" class="w-4 h-4 text-blue-600 dark:text-blue-300 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checked-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{__('auth.remember_me')}}</label>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link text-gray-900 dark:text-gray-400" href="{{ route('password.request') }}" wire:navigate>
                                {{ __('auth.forgot_your_password') }}
                            </a>
                        @endif
                    </div>

                    <button wire:click.prevent="submitLogin" 
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white dark:bg-blue-500 dark:hover:bg-blue-600 font-bold py-2 px-4 rounded-md active:scale-95">
                        {{__('auth.login')}}
                    </button>
                    @error('error') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </form>
        </div>
    </div>

    <x-loading targetName="submitLogin" />
</div>
