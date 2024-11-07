<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Default Title' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body >

    <div x-data="dropdown">
        <button @click="toggle">Expand</button>
     
        <span x-show="open">Content...</span>
    </div>
     
    <div x-data="dropdown">
        <button @click="toggle">Expand</button>
     
        <span x-show="open">Some Other Content...</span>
    </div>
    {{--  --}}

    <div x-data>
        <button @click="$store.counter.increment()">Увеличить</button>
        <span x-text="$store.counter.count"></span>
    </div>
    @livewireScripts
</body>
</html>
