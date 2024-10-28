<aside id="logo-sidebar" class="fixed top-0 left-0 z-10 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-4 font-medium mt-6">
            <x-dashboard.side-bar-links title="{{ __('sidebar.dashboard') }}" icon="chart-pie" />
            <x-dashboard.side-bar-links title="{{ __('sidebar.suppliers') }}" icon="squares-2x2" />
            <x-dashboard.side-bar-links title="{{ __('sidebar.promotions') }}" icon="star" />
            <x-dashboard.side-bar-links title="{{ __('sidebar.registrations') }}" icon="c-user-plus" />
            <x-dashboard.side-bar-links title="{{ __('sidebar.administrators') }}" icon="shield-check" />
        </ul>
    </div>
</aside>