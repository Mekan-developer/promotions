<div>
    @props([
        'showPassword',
        'callFunctionName'
        ])
    <button class="absolute top-3 right-2" wire:click="{{$callFunctionName}}">
        <x-dynamic-component :component="$showPassword ? 'heroicon-c-eye' : 'heroicon-c-eye-slash'" 
        class="w-6 h-6 text-gray-700 dark:text-gray-300 cursor-pointer" />
    </button>
</div>