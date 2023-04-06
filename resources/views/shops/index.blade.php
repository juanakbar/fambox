@php use Carbon\Carbon; @endphp
<x-guest-layout>

    <section class="bg-white dark:bg-gray-900 my-10 sm:mt-48 mt-24">
        <div class="flex justify-center items-center">
            <div class="max-w-7xl mx-auto">
                <div class="w-full bg-white h-full">
                    <div class="p-6">
                        <!-- component -->
                        <section class="bg-white dark:bg-gray-900">
                            <div class="container px-6 mx-auto">
                                <div class="lg:flex lg:-mx-2">
                                    <div class="space-y-3 lg:w-1/5 lg:px-2 lg:space-y-4">
                                        <div x-data="{ open: false }">
                                            <button x-on:click="open = !open"
                                                    class="w-full text-white bg-[#C6D166] hover:bg-[#C6D166]/90 focus:ring-4 focus:outline-none focus:ring-[#C6D166]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#C6D166]/55 mr-2 mb-2">

                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     class="icon icon-tabler icon-tabler-menu-2 w-4 h-4 mr-2 -ml-1"
                                                     width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                     stroke="currentColor" fill="none" stroke-linecap="round"
                                                     stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M4 6l16 0"></path>
                                                    <path d="M4 12l16 0"></path>
                                                    <path d="M4 18l16 0"></path>
                                                </svg>
                                                Kategori
                                            </button>
                                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                                 x-transition:enter-start="transform opacity-0 scale-95"
                                                 x-transition:enter-end="transform opacity-100 scale-100"
                                                 x-transition:leave="transition ease-in duration-75"
                                                 x-transition:leave-start="transform opacity-100 scale-100"
                                                 x-transition:leave-end="transform opacity-0 scale-95">
                                                <div class="bg-white border border-gray-300 w-full p-6 rounded-lg">
                                                    <a href="#"
                                                       class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Jackets
                                                        & Coats</a>
                                                    <a href="#"
                                                       class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Hoodies</a>
                                                    <a href="#"
                                                       class="block font-medium text-blue-600 dark:text-blue-500 hover:underline">T-shirts
                                                        & Vests</a>
                                                    <a href="#"
                                                       class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Shirts</a>
                                                    <a href="#"
                                                       class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Blazers
                                                        & Suits</a>
                                                    <a href="#"
                                                       class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Jeans</a>
                                                    <a href="#"
                                                       class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Trousers</a>
                                                    <a href="#"
                                                       class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Shorts</a>
                                                    <a href="#"
                                                       class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Underwear</a>
                                                </div>
                                            </div>

                                        </div>
                                        <div x-data="{ open: false }">
                                            <button x-on:click="open = !open"
                                                    class="w-full text-white bg-[#C6D166] hover:bg-[#C6D166]/90 focus:ring-4 focus:outline-none focus:ring-[#C6D166]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#C6D166]/55 mr-2 mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     class="w-4 h-4 mr-2 -ml-1 icon icon-tabler icon-tabler-filter"
                                                     width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                     stroke="currentColor" fill="none" stroke-linecap="round"
                                                     stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M4 4h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414v7l-6 2v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227z">
                                                    </path>
                                                </svg>
                                                Filter
                                            </button>
                                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                                 x-transition:enter-start="transform opacity-0 scale-95"
                                                 x-transition:enter-end="transform opacity-100 scale-100"
                                                 x-transition:leave="transition ease-in duration-75"
                                                 x-transition:leave-start="transform opacity-100 scale-100"
                                                 x-transition:leave-end="transform opacity-0 scale-95">
                                                <div class="bg-white border border-gray-300 w-full p-6 rounded-lg">
                                                    <a href="#"
                                                       class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Jackets
                                                        & Coats</a>
                                                    <a href="#"
                                                       class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Hoodies</a>
                                                    <a href="#"
                                                       class="block font-medium text-blue-600 dark:text-blue-500 hover:underline">T-shirts
                                                        & Vests</a>
                                                    <a href="#"
                                                       class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Shirts</a>
                                                    <a href="#"
                                                       class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Blazers
                                                        & Suits</a>
                                                    <a href="#"
                                                       class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Jeans</a>
                                                    <a href="#"
                                                       class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Trousers</a>
                                                    <a href="#"
                                                       class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Shorts</a>
                                                    <a href="#"
                                                       class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Underwear</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="mt-6 lg:mt-0 lg:px-2 lg:w-4/5 ">
                                        <div
                                            class="flex items-center justify-between text-sm tracking-widest uppercase ">
                                            <p class="text-gray-500 dark:text-gray-300">6 Items</p>
                                            <div class="flex items-center">
                                                <p class="text-gray-500 dark:text-gray-300">Sort</p>
                                                <select
                                                    class="font-medium text-gray-700 bg-transparent dark:text-gray-500 focus:outline-none">
                                                    <option value="#">Recommended</option>
                                                    <option value="#">Size</option>
                                                    <option value="#">Price</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div
                                            class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                                            <a class="relative flex items-center justify-center rounded-xl border border-gray-100 p-4 sm:p-6 lg:p-8 border-gray-300"
                                               href="#">
                                                <div class="pt-4 text-gray-500">
                                                    <div class="flex items-center justify-center">
                                                        <img src="{{ asset('img/product1.png') }}" alt="Product">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             class="icon icon-tabler icon-tabler-heart text-gray-500 absolute top-4 right-4"
                                                             width="24"
                                                             height="24" viewBox="0 0 24 24" stroke-width="2"
                                                             stroke="currentColor" fill="none" stroke-linecap="round"
                                                             stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path
                                                                d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                                                        </svg>
                                                    </div>

                                                    <h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl text-center">
                                                        Nanas Madu/Buah
                                                    </h3>
                                                    <h3 class="text-lg font-bold text-gray-900/50 sm:text-xl text-center">
                                                        Rp.7000
                                                    </h3>
                                                    <div class="flex items-center mt-2.5 justify-center">
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>First
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Second
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Third
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Fourth
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Fifth
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="relative flex items-center justify-center rounded-xl border border-gray-100 p-4 sm:p-6 lg:p-8 border-gray-300"
                                               href="#">
                                                <div class="pt-4 text-gray-500">
                                                    <div class="flex items-center justify-center">
                                                        <img src="{{ asset('img/product1.png') }}" alt="Product">
                                                    </div>

                                                    <h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl text-center">
                                                        Nanas Madu/Buah
                                                    </h3>
                                                    <h3 class="text-lg font-bold text-gray-900/50 sm:text-xl text-center">
                                                        Rp.7000
                                                    </h3>
                                                    <div class="flex items-center mt-2.5 justify-center">
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>First
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Second
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Third
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Fourth
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Fifth
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="relative flex items-center justify-center rounded-xl border border-gray-100 p-4 sm:p-6 lg:p-8 border-gray-300"
                                               href="#">
                                                <div class="pt-4 text-gray-500">
                                                    <div class="flex items-center justify-center">
                                                        <img src="{{ asset('img/product1.png') }}" alt="Product">
                                                    </div>

                                                    <h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl text-center">
                                                        Nanas Madu/Buah
                                                    </h3>
                                                    <h3 class="text-lg font-bold text-gray-900/50 sm:text-xl text-center">
                                                        Rp.7000
                                                    </h3>
                                                    <div class="flex items-center mt-2.5 justify-center">
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>First
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Second
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Third
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Fourth
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Fifth
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="relative flex items-center justify-center rounded-xl border border-gray-100 p-4 sm:p-6 lg:p-8 border-gray-300"
                                               href="#">
                                                <div class="pt-4 text-gray-500">
                                                    <div class="flex items-center justify-center">
                                                        <img src="{{ asset('img/product1.png') }}" alt="Product">
                                                    </div>

                                                    <h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl text-center">
                                                        Nanas Madu/Buah
                                                    </h3>
                                                    <h3 class="text-lg font-bold text-gray-900/50 sm:text-xl text-center">
                                                        Rp.7000
                                                    </h3>
                                                    <div class="flex items-center mt-2.5 justify-center">
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>First
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Second
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Third
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Fourth
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Fifth
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>

                                            <a class="relative flex items-center justify-center rounded-xl border border-gray-100 p-4 sm:p-6 lg:p-8 border-gray-300"
                                               href="#">
                                                <div class="pt-4 text-gray-500">
                                                    <div class="flex items-center justify-center">
                                                        <img src="{{ asset('img/product1.png') }}" alt="Product">
                                                    </div>

                                                    <h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl text-center">
                                                        Nanas Madu/Buah
                                                    </h3>
                                                    <h3 class="text-lg font-bold text-gray-900/50 sm:text-xl text-center">
                                                        Rp.7000
                                                    </h3>
                                                    <div class="flex items-center mt-2.5 justify-center">
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>First
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Second
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Third
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Fourth
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Fifth
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="relative flex items-center justify-center rounded-xl border border-gray-100 p-4 sm:p-6 lg:p-8 border-gray-300"
                                               href="#">
                                                <div class="pt-4 text-gray-500">
                                                    <div class="flex items-center justify-center">
                                                        <img src="{{ asset('img/product1.png') }}" alt="Product">
                                                    </div>

                                                    <h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl text-center">
                                                        Nanas Madu/Buah
                                                    </h3>
                                                    <h3 class="text-lg font-bold text-gray-900/50 sm:text-xl text-center">
                                                        Rp.7000
                                                    </h3>
                                                    <div class="flex items-center mt-2.5 justify-center">
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>First
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Second
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Third
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Fourth
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Fifth
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="relative flex items-center justify-center rounded-xl border border-gray-100 p-4 sm:p-6 lg:p-8 border-gray-300"
                                               href="#">
                                                <div class="pt-4 text-gray-500">
                                                    <div class="flex items-center justify-center">
                                                        <img src="{{ asset('img/product1.png') }}" alt="Product">
                                                    </div>

                                                    <h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl text-center">
                                                        Nanas Madu/Buah
                                                    </h3>
                                                    <h3 class="text-lg font-bold text-gray-900/50 sm:text-xl text-center">
                                                        Rp.7000
                                                    </h3>
                                                    <div class="flex items-center mt-2.5 justify-center">
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>First
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Second
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Third
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Fourth
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Fifth
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="relative flex items-center justify-center rounded-xl border border-gray-100 p-4 sm:p-6 lg:p-8 border-gray-300"
                                               href="#">
                                                <div class="pt-4 text-gray-500">
                                                    <div class="flex items-center justify-center">
                                                        <img src="{{ asset('img/product1.png') }}" alt="Product">
                                                    </div>

                                                    <h3 class="mt-4 text-lg font-bold text-gray-900 sm:text-xl text-center">
                                                        Nanas Madu/Buah
                                                    </h3>
                                                    <h3 class="text-lg font-bold text-gray-900/50 sm:text-xl text-center">
                                                        Rp.7000
                                                    </h3>
                                                    <div class="flex items-center mt-2.5 justify-center">
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>First
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Second
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Third
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Fourth
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                        <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                             fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <title>Fifth
                                                                star</title>
                                                            <path
                                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
