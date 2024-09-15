<x-app-layout>
    @section('hero')
        <!-- Main Hero Content -->
        <div
            class="container max-w-sm py-32 mx-auto mt-px text-left sm:max-w-md md:max-w-lg sm:px-4 md:max-w-none md:text-center">
            <h1
                class="text-3xl font-bold leading-10 tracking-tight text-left text-red-700 md:text-center sm:text-4xl md:text-7xl lg:text-8xl">
                Welcome to <br class="hidden sm:block"> Tall.Blogs</h1>
            <div class="mx-auto mt-5 text-red-500 md:mt-8 md:max-w-lg md:text-center md:text-xl">Best Blog in the universe!
            </div>
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
        <div class="mb-10">
            <div class="mb-16">
                <h2 class="mt-16 mb-5 text-3xl text-white font-bold">Featured Posts</h2>
                <div class="w-full">
                    <div class="grid grid-cols-3 gap-10 w-full">
                        <div class="md:col-span-1 col-span-3">
                            <a href="http://127.0.0.1:8000/blog/laravel-34">
                                <div>
                                    <img class="w-full rounded-xl"
                                        src="http://127.0.0.1:8000/storage/3i5uKG05UnvhbORZ3ieDkvtAOL8ss5-metaZXAxNSAoMjIpLnBuZw==-.png">
                                </div>
                            </a>
                            <div class="mt-3">
                                <div class="flex items-center mb-2">
                                    <a href="http://127.0.0.1:8000/categories/laravel"
                                        class="bg-red-700
                                        text-white
                                        rounded-xl px-3 py-1 text-sm mr-3">
                                        Laravel
                                    </a>
                                    <p class="text-red-500 text-sm">2023-09-05</p>
                                </div>
                                <a class="text-xl font-bold text-red-700">Laravel 11 tutorial feed page #34</a>
                            </div>

                        </div>
                        <div class="md:col-span-1 col-span-3">
                            <a href="http://127.0.0.1:8000/blog/fil3tutorial">
                                <div>
                                    <img class="w-full rounded-xl"
                                        src="http://127.0.0.1:8000/storage/4sEsCDleYEXT4GC7AdU8BP7TBab3cx-metaZmlsYW1lbnQgY291cnNlICg0KS5wbmc=-.png">
                                </div>
                            </a>
                            <div class="mt-3">
                                <div class="flex items-center mb-2">
                                    <a href="http://127.0.0.1:8000/categories/PHP"
                                        class="bg-blue-400
                                        text-white
                                        rounded-xl px-3 py-1 text-sm mr-3">
                                        PHP</a>
                                    <p class="text-red-500 text-sm">2023-09-04</p>
                                </div>
                                <a class="text-xl font-bold text-red-700">Filament 1 relationship manager tutorial
                                </a>
                            </div>

                        </div>
                        <div class="md:col-span-1 col-span-3">

                            <div>
                                <img class="w-full rounded-xl"
                                    src="https://via.placeholder.com/640x480.png/0000ee?text=corrupti">
                            </div>
                            <div class="mt-3">
                                <div class="flex items-center mb-2">
                                    <p class="text-red-500 text-sm">2023-08-29</p>
                                </div>
                                <a class="text-xl font-bold text-red-700">Mary Berg1</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="mt-10 block text-center text-lg text-white font-semibold"
                    href="http://127.0.0.1:8000/blog">More
                    Posts</a>
            </div>
            <hr>

            <h2 class="mt-16 mb-5 text-3xl text-white font-bold">Latest Posts</h2>
            <div class="w-full mb-5">
                <div class="grid grid-cols-3 gap-10 gap-y-32 w-full">
                    <div class="md:col-span-1 col-span-3">
                        <a href="http://127.0.0.1:8000/blog/laravel-34">
                            <div>
                                <img class="w-full rounded-xl"
                                    src="http://127.0.0.1:8000/storage/3i5uKG05UnvhbORZ3ieDkvtAOL8ss5-metaZXAxNSAoMjIpLnBuZw==-.png">
                            </div>
                        </a>
                        <div class="mt-3"><a href="http://127.0.0.1:8000/blog/laravel-34">
                            </a>
                            <div class="flex items-center mb-2"><a href="http://127.0.0.1:8000/blog/laravel-34">
                                </a><a href="http://127.0.0.1:8000/categories/laravel"
                                    class="bg-red-600
                                        text-white
                                        rounded-xl px-3 py-1 text-sm mr-3">
                                    Laravel</a>
                                <p class="text-red-500 text-sm">2023-09-05</p>
                            </div>
                            <h3 class="text-xl font-bold text-red-700">Laravel 11 tutorial feed page #34</h3>
                        </div>

                    </div>
                    <div class="md:col-span-1 col-span-3">
                        <a href="http://127.0.0.1:8000/blog/fil3tutorial">
                            <div>
                                <img class="w-full rounded-xl"
                                    src="http://127.0.0.1:8000/storage/4sEsCDleYEXT4GC7AdU8BP7TBab3cx-metaZmlsYW1lbnQgY291cnNlICg0KS5wbmc=-.png">
                            </div>
                        </a>
                        <div class="mt-3"><a href="http://127.0.0.1:8000/blog/fil3tutorial">
                            </a>
                            <div class="flex items-center mb-2"><a href="http://127.0.0.1:8000/blog/fil3tutorial">
                                </a><a href="http://127.0.0.1:8000/categories/PHP"
                                    class="bg-blue-400
                                        text-white
                                        rounded-xl px-3 py-1 text-sm mr-3">
                                    PHP</a>
                                <p class="text-red-500 text-sm">2023-09-04</p>
                            </div>
                            <h3 class="text-xl font-bold text-red-700">Filament 1 relationship manager tutorial</h3>
                        </div>

                    </div>
                    <div class="md:col-span-1 col-span-3">
                        <a
                            href="http://127.0.0.1:8000/blog/in-exercitationem-quis-dolor-consequatur-eligendi-esse-rerum">
                            <div>
                                <img class="w-full rounded-xl"
                                    src="https://via.placeholder.com/640x480.png/0000ee?text=corrupti">
                            </div>
                            <div class="mt-3">
                                <div class="flex items-center mb-2">
                                    <p class="text-red-500 text-sm">2023-08-29</p>
                                </div>
                                <h3 class="text-xl font-bold text-red-700">Mary Berg1</h3>
                            </div>
                        </a>
                    </div>
                    <div class="md:col-span-1 col-span-3">
                        <a href="http://127.0.0.1:8000/blog/autem-nesciunt-architecto-doloribus-ut-id">
                            <div>
                                <img class="w-full rounded-xl"
                                    src="https://via.placeholder.com/640x480.png/00ee33?text=nihil">
                            </div>
                            <div class="mt-3">
                                <div class="flex items-center mb-2">
                                    <p class="text-red-500 text-sm">2023-08-29</p>
                                </div>
                                <h3 class="text-xl font-bold text-red-700">Dr. Reina1Yost</h3>
                            </div>
                        </a>
                    </div>
                    <div class="md:col-span-1 col-span-3">
                        <a href="http://127.0.0.1:8000/blog/voluptas-ipsam-ea-officia-nostrum">
                            <div>
                                <img class="w-full rounded-xl"
                                    src="https://via.placeholder.com/640x480.png/00cc33?text=in">
                            </div>
                            <div class="mt-3">
                                <div class="flex items-center mb-2">
                                    <p class="text-red-500 text-sm">2023-08-29</p>
                                </div>
                                <h3 class="text-xl font-bold text-red-700">Carlie He1mann</h3>
                            </div>
                        </a>
                    </div>
                    <div class="md:col-span-1 col-span-3">
                        <a href="http://127.0.0.1:8000/blog/ea-officiis-tenetur-aut-voluptatem">
                            <div>
                                <img class="w-full rounded-xl"
                                    src="https://via.placeholder.com/640x480.png/00eeaa?text=repudiandae">
                            </div>
                            <div class="mt-3">
                                <div class="flex items-center mb-2">
                                    <p class="text-red-500 text-sm">2023-08-29</p>
                                </div>
                                <h3 class="text-xl font-bold text-red-700">Tess Kub<1h3>
                            </div>
                        </a>
                    </div>
                    <div class="md:col-span-1 col-span-3">
                        <a
                            href="http://127.0.0.1:8000/blog/non-et-molestiae-repellat-omnis-amet-mollitia-necessitatibus">
                            <div>
                                <img class="w-full rounded-xl"
                                    src="https://via.placeholder.com/640x480.png/00bb77?text=et">
                            </div>
                            <div class="mt-3">
                                <div class="flex items-center mb-2">
                                    <p class="text-red-500 text-sm">2023-08-29</p>
                                </div>
                                <h3 class="text-xl font-bold text-red-700">Lysanne S1hmeler</h3>
                            </div>
                        </a>
                    </div>
                    <div class="md:col-span-1 col-span-3">
                        <a href="http://127.0.0.1:8000/blog/itaque-officiis-accusantium-quis-distinctio">
                            <div>
                                <img class="w-full rounded-xl"
                                    src="https://via.placeholder.com/640x480.png/00dd88?text=et">
                            </div>
                            <div class="mt-3">
                                <div class="flex items-center mb-2">
                                    <p class="text-red-500 text-sm">2023-08-29</p>
                                </div>
                                <h3 class="text-xl font-bold text-red-700">Dr. Kiara1Mohr</h3>
                            </div>
                        </a>
                    </div>
                    <div class="md:col-span-1 col-span-3">
                        <a href="http://127.0.0.1:8000/blog/sed-dolor-id-qui-distinctio-autem-repellat-voluptas">
                            <div>
                                <img class="w-full rounded-xl"
                                    src="https://via.placeholder.com/640x480.png/002288?text=aut">
                            </div>
                            <div class="mt-3">
                                <div class="flex items-center mb-2">
                                    <p class="text-red-500 text-sm">2023-08-29</p>
                                </div>
                                <h3 class="text-xl font-bold text-red-700">Alfreda H1lls</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <a class="mt-10 block text-center text-lg text-white font-semibold" href="http://127.0.0.1:8000/blog">More
                Posts</a>
        </div>
    </main>


</x-app-layout>
