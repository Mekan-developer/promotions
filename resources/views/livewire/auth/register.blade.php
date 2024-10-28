<div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex items-center justify-center">
    <div class="w-full max-w-md" wire:loading.remove wire:target='register'>
        <div class="bg-white dark:bg-gray-800 rounded-md shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 text-center mb-6">Register</h2>
            <div >
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Username</label>
                    <input autocomplete="off" type="text" wire:model.blur="username" id="name"
                        class="w-full p-3 bg-gray-50 dark:bg-gray-700 border dark:text-gray-300 border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-300">
                    @error('username') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                    <input autocomplete="off" type="email" wire:model.blur="email" id="email"
                        class="w-full p-3 bg-gray-50 dark:bg-gray-700 border dark:text-gray-300 border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-300">
                    @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div >
                    <div class="mb-4" wire:click.outside="hidePopover">
                        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                        <div class="relative">
                            <input data-popover-target="popover_password" data-popover-placement="bottom" 
                            autocomplete="off" type="{{ $showPassword1 ? 'text' : 'password' }}" 
                            wire:model.live.debounce.300ms="password" id="password"
                                class="w-full p-3 bg-gray-50 dark:bg-gray-700 border dark:text-gray-300 border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-300">
                            @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            <x-show-password-eye showPassword={{$showPassword1}} callFunctionName="togglePasswordVisibility" />
                        </div>
                        @if ($showPopover)
                            <x-show-password-requirements :rules="$rules" :strength="$strength" />
                        @endif                   
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Confirm Password</label>
                    <div class="relative">
                        <input autocomplete="off" type="{{ $showPassword2 ? 'text' : 'password' }}" wire:model.blur="password_confirmation" 
                        id="password_confirmation" wire:click='$showPopover = false'
                            class="w-full p-3 bg-gray-50 dark:bg-gray-700 border dark:text-gray-300 border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-300">
                        @error('password_confirmation') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        <x-show-password-eye showPassword={{$showPassword2}} callFunctionName="togglePasswordConfirmationVisibility" />
                    </div>
                </div>

                <button type="submit" wire:click.prevent="register"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white dark:bg-blue-500 dark:hover:bg-blue-600 font-bold py-2 px-4 rounded-md active:scale-95">
                    Register
                </button>
            </div>
        </div>

        <div class="text-center mt-6 text-gray-600 dark:text-gray-400">
            Already have an account? <a href="{{ route('login') }}" class="text-blue-600 dark:text-blue-300 hover:underline" wire:navigate >Login</a>
        </div>
    </div>

    <x-loading targetName="register" />
</div>
