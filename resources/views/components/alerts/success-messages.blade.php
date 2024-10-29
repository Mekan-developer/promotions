<div>
    @if (session()->has('message'))
        <div id="alert-message" class="alert alert-success fixed top-0 z-50 left-1/2 transform -translate-x-1/2 mt-4 flex items-center px-4 py-1 rounded-lg shadow-md" role="alert">
            <span class="flex-grow text-white">{{ session('message') }}</span>
            <button type="button" class="ml-4 text-white text-[32px]" onclick="document.getElementById('alert-message').remove()">
                &times;
            </button>
        </div>
    @endif
</div>