<x-app-layout>
    @section('hero')
        <!-- Main Hero Content -->
        <div
            class="container max-w-sm py-32 mx-auto mt-px text-left sm:max-w-md md:max-w-lg sm:px-4 md:max-w-none md:text-center">
            <h1
                class="text-3xl font-bold leading-10 tracking-tight text-left text-red-700 md:text-center sm:text-4xl md:text-7xl lg:text-8xl">
                Welcome to <br class="hidden sm:block"> Tall.Blogs</h1>
            <x-type />
            <div
                class="flex flex-col items-center justify-center mt-8 space-y-4 text-center sm:flex-row sm:space-y-0 sm:space-x-4">

                <span class="relative inline-flex w-full md:w-auto">
                    <a href="#_"
                        class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-medium leading-6 text-red-700 bg-red-100 border border-transparent rounded-full xl:px-10 md:w-auto hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-200">Start
                        Reading</a>
                </span>
            </div>
        </div>
        <!-- End Main Hero Content -->
    @endsection
    <main class="container mx-auto px-5 flex flex-grow">
        <div class="mb-10 w-full">
            <div class="mb-16">
                <h2 class="mt-16 mb-5 text-3xl text-white font-bold">Featured Posts</h2>
                <div class="w-full">
                    <div class="grid grid-cols-3 gap-10 w-full">
                        @foreach ($featuredPosts as $post)
                            <div class="md:col-span-1 col-span-3">
                                <x-posts.post-card :post="$post" />
                            </div>
                        @endforeach
                    </div>
                    <a class="mt-10 block text-center text-lg text-white font-semibold mb-5"
                        href="http://127.0.0.1:8000/blog">More
                        Posts</a>
                </div>
                <hr>

                <h2 class="mt-16 mb-5 text-3xl text-white font-bold">Latest Posts</h2>
                <div class="w-full mb-5">
                    <div class="grid grid-cols-3 gap-10 w-full">
                        @foreach ($latestPosts as $post)
                            <div class="md:col-span-1 col-span-3">
                                <x-posts.post-card :post="$post" />
                            </div>
                        @endforeach
                    </div>
                </div>
                <a class="mt-10 block text-center text-lg text-white font-semibold"
                    href="http://127.0.0.1:8000/blog">More
                    Posts</a>
            </div>
    </main>


</x-app-layout>
