<aside id="logo-sidebar" class="fixed top-0 left-0 z-10 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-4 font-medium mt-6">
            <x-dashboard.side-bar-links title="{{ __('sidebar.dashboard') }}" icon="chart-pie" :activeLink="request()->routeIs('dashboard*')" link="dashboard.home" />
            <x-dashboard.side-bar-links title="{{ __('sidebar.suppliers') }}" icon="user-group" :activeLink="request()->routeIs('suppliers*')" link="suppliers.index" />
            <x-dashboard.side-bar-links title="{{ __('sidebar.promotions') }}" icon="star" :activeLink="request()->routeIs('promotions*')" link="promotions.index"/>
            <x-dashboard.side-bar-links title="{{ __('sidebar.registrations') }}" icon="c-user-plus" :activeLink="request()->routeIs('supplieras*')" link="suppliers.index"/>
            <x-dashboard.side-bar-links title="{{ __('sidebar.administrators') }}" icon="shield-check" :activeLink="request()->routeIs('supplierss*')" link="suppliers.index"/>
        </ul>
    </div>
</aside>