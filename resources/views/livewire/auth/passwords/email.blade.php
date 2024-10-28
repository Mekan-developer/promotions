<div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex items-center justify-center">
    <div class="w-full max-w-md" wire:loading.remove>
        <div class="bg-white dark:bg-gray-800 rounded-md shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 text-center mb-6">Reset Password</h2>
            <div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                    <input type="email" wire:model="email" id="email" autocomplete="off"
                        class="w-full p-3 bg-gray-50 dark:bg-gray-700 border dark:text-gray-300 border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-300">
                    @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <button type="submit" wire:click.prevent="sendResetLink"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white dark:bg-blue-500 dark:hover:bg-blue-600 font-bold py-2 px-4 rounded-md">
                    Send Password Reset Link
                </button>

                @if (session()->has('status'))
                    <div class="mt-4 text-green-500">{{ session('status') }}</div>
                @endif

                @if (session()->has('error'))
                    <div class="mt-4 text-red-500">{{ session('error') }}</div>
                @endif
            </div>
        </div>

        <div class="text-center mt-6 text-gray-600 dark:text-gray-400">
            <a href="{{ route('login') }}" wire:navigate class="text-blue-600 dark:text-blue-300 hover:underline">Back to login</a>
        </div>
    </div>
    <x-loading targetName="sendResetLink" />
</div>
