<div>

    <x-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')"
        class="inline-flex items-center justify-center px-4 py-2 font-medium leading-6 text-white whitespace-no-wrap bg-red-700 border border-red-700 rounded-md shadow-sm hover:bg-white hover:text-red-700 focus:outline-none focus:shadow-none"
        data-rounded="rounded-md">
        {{ __('Login') }}
    </x-nav-link>
    <x-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')"
        class="inline-flex items-center justify-center px-4 py-2 font-medium leading-6 text-red-700 whitespace-no-wrap bg-red-white border border-white rounded-md shadow-sm hover:bg-red-700 hover:  text-white focus:outline-none focus:shadow-none"
        data-rounded="rounded-md">
        {{ __('Register') }}
    </x-nav-link>

</div>
