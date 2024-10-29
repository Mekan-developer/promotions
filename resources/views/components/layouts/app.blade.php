<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Default Title' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    @vite(['resources/css/app.css'])
    @livewireStyles
</head>
<body x-init="darkMode = localStorage.getItem('theme') === 'dark'; document.documentElement.classList.toggle('dark', darkMode)">
    @guest
        <div>
            {{ $slot }}
        </div>
    @endguest

    @auth
        <x-alerts.success-messages/>

        <livewire:dashboard.includes.nav-bar />
        <livewire:dashboard.includes.side-bar />
        <div class="p-4 sm:ml-64 sm:w-[calc(100%-256px)] flex justify-center overflow-hidden overflow-y-auto h-[calc(100vh-76px)] mt-[64px]">
            {{ $slot }}
        </div>
    @endauth

    @vite(['resources/js/app.js'])
    @livewireScripts
</body>
</html>
