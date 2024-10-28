<div>
    <button x-data="{darkMode: localStorage.getItem('theme') === 'dark'}" 
            @click="darkMode = !darkMode; 
            localStorage.setItem('theme', darkMode ? 'dark' : 'light'); 
            document.documentElement.classList.toggle('dark', darkMode);" 
            x-init="document.documentElement.classList.toggle('dark', darkMode)"
            class="p-2  rounded-full">
        <x-heroicon-c-sun x-show="!darkMode" class="w-6 h-6 text-gray-400 hover:text-gray-500" />
        <x-heroicon-s-moon x-show="darkMode" class="w-6 h-6 text-gray-300 hover:text-gray-400" />
    </button>
</div>