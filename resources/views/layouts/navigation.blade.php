<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>

    @if(Auth::user()->is_admin)
        <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
            {{ __('Admin Dashboard') }}
        </x-nav-link>
        <x-nav-link :href="route('admin.products.index')" :active="request()->routeIs('admin.products.*')">
            {{ __('Products') }}
        </x-nav-link>
        <x-nav-link :href="route('admin.categories.index')" :active="request()->routeIs('admin.categories.*')">
            {{ __('Categories') }}
        </x-nav-link>
        <x-nav-link :href="route('admin.orders.index')" :active="request()->routeIs('admin.orders.*')">
            {{ __('Manage Orders') }}
        </x-nav-link>
    @endif
</div>
