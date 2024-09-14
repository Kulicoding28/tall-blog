<section class="relative w-full text-red-700" data-tails-scripts="//unpkg.com/alpinejs" {!! $attributes ?? '' !!}>
    <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
        <a href="#_"
            class="relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none  select-none text-red-700 hover:text-white">Tall.Blogs</a>

        <nav
            class="top-0 left-0 z-0 flex items-center justify-center w-full h-full py-5 -ml-0 space-x-5 text-base md:-ml-5 md:py-0 md:absolute">
            <a href="#_"
                class="relative font-medium leading-6 text-red-700 transition duration-150 ease-out hover:text-white"
                x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <span class="block">Home</span>
                <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform bg-red-700"
                        x-transition:enter="transition ease duration-400" x-transition:enter-start="scale-0"
                        x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300"
                        x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                </span>
            </a>
            <a href="#_"
                class="relative font-medium leading-6 text-red-700 transition duration-150 ease-out hover:text-white"
                x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <span class="block">Features</span>
                <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform bg-red-700"
                        x-transition:enter="transition ease duration-400" x-transition:enter-start="scale-0"
                        x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300"
                        x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                </span>
            </a>
            <a href="#_"
                class="relative font-medium leading-6 text-red-700 transition duration-150 ease-out hover:text-white"
                x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <span class="block">Pricing</span>
                <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform bg-red-700"
                        x-transition:enter="transition ease duration-400" x-transition:enter-start="scale-0"
                        x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300"
                        x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                </span>
            </a>
            <a href="#_"
                class="relative font-medium leading-6 text-red-700 transition duration-150 ease-out hover:text-white"
                x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <span class="block">Blog</span>
                <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform bg-red-700"
                        x-transition:enter="transition ease duration-400" x-transition:enter-start="scale-0"
                        x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300"
                        x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                </span>
            </a>
        </nav>

        <div class="relative z-10 inline-flex items-center space-x-3 md:ml-5 lg:justify-end">

            @guest
                @include('layouts.partials.header-guest')
            @endguest

            @auth
                @include('layouts.partials.header-auth')
            @endauth
        </div>

</section>
