<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-900 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('welcome') }}" class="flex items-center">
            <img src="{{ asset('img/logo.png') }}" class="sm:h-12 mr-3 h-8" alt="Logo">
        </a>
        <div class="flex md:order-2 gap-3">
            @auth()
                <div class="flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell text-gray-500"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6">
                        </path>
                        <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                    </svg>
                </div>
            @endauth
            <div class="border-r-2 border-[#D9D9D9]"></div>
            <div class="flex gap-3">
                <div class="sm:flex hidden gap-3">
                    @auth()
                        <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider"
                            class="text-white flex justify-center items-center bg-[#C6D166] hover:bg-[#C6D16650]/50 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">{{ Auth::user()->name }}
                            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownDivider"
                            class="z-50 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                aria-labelledby="dropdownDividerButton">
                                <li>
                                    <a href="{{ route('cart.index') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Your
                                        Cart</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit"
                                        class="w-full block text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                        Sign Out
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <button data-modal-target="authentication-modal-login"
                            data-modal-toggle="authentication-modal-login"
                            class="border border-gray-900 bg-white text-black disabled:opacity-50 transition duration-300 hover:enabled:border-slate-300 hover:enabled:bg-slate-200 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:shadow dark:hover:enabled:border-slate-600 dark:hover:enabled:bg-slate-700 py-2 inline-block px-4 rounded-lg font-medium fade text-sm">
                            Masuk
                        </button>
                        <button data-modal-target="authentication-modal-register"
                            data-modal-toggle="authentication-modal-register"
                            class="border border-gray-900 bg-[#C6D166] text-black disabled:opacity-50 transition duration-300 hover:enabled:border-slate-300 hover:enabled:bg-slate-200 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:shadow dark:hover:enabled:border-slate-600 dark:hover:enabled:bg-slate-700 py-2 inline-block px-4 rounded-lg font-medium fade text-sm">
                            Daftar
                        </button>
                    @endauth

                </div>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <x-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                        Home
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('shop.index')" :active="request()->routeIs('shop.*')">
                        Shop
                    </x-nav-link>
                </li>
                @auth()
                    <li class="block sm:hidden">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                            {{ Auth::user()->name }}
                            <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="{{ route('cart.index') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Your
                                        Cart</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit"
                                        class="w-full block text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                        Sign Out
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                @else
                    <button data-modal-target="authentication-modal-login" data-modal-toggle="authentication-modal-login"
                        class="mt-3 sm:hidden border border-gray-900 bg-[#C6D166] text-black disabled:opacity-50 transition duration-300 hover:enabled:border-slate-300 hover:enabled:bg-slate-200 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:shadow dark:hover:enabled:border-slate-600 dark:hover:enabled:bg-slate-700 py-2 inline-block px-4 rounded-lg font-medium fade text-sm">
                        Masuk
                    </button>
                @endauth
            </ul>
        </div>
    </div>
    <div class="max-w-screen-sm sm:flex hidden justify-center mx-auto pb-4 pl-0">
        <div class="items-center justify-between hidden w-full md:flex">
            <div class="w-full">
                <form class="w-full">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <button type="submit"
                            class="text-white absolute right-2.5 bottom-2.5 bg-[#C6D166] hover:bg-[#C6D16650]/50 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">
                            Search
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</nav>
