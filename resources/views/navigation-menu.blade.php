<nav class="relative w-full text-red-700" data-tails-scripts="//unpkg.com/alpinejs" {!! $attributes ?? '' !!}>
    <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">

        <a href="{{ route('home') }}"
            class="relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none select-none text-red-700 hover:text-white">
            <x-application-mark />_Tall.Blogs</a>

        <nav
            class="top-0 left-0 z-0 flex items-center justify-center w-full h-full py-5 -ml-0 space-x-5 text-base md:-ml-5 md:py-0 md:absolute">
            <div id="nav-left">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>
            </div>

        </nav>

        <div id="nav-right" class="relative z-10 inline-flex items-center space-x-3 md:ml-5 lg:justify-end">
            @auth
                @include('layouts.partials.header-auth')
            @else
                @include('layouts.partials.header-guest')
            @endauth
        </div>

        </section>
