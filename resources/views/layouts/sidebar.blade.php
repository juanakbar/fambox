<div class="space-y-3 lg:w-1/5 bg-[#CCCBCB1A] sm:border-r border-b border-[#00000029]/84 p-6 sm:mt-0 mt-10">
    <div>
        <div class="flex justify-start items-center gap-2 mb-3 mt-6">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user text-[#C6D166]"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                </svg>
            </div>
            <div>{{ Auth::user()->name }}</div>
        </div>
        <div class="w-full h-full ">
            <div class="border-t h-px w-full border-[#00000029]/84 mb-6 "></div>
            <x-side-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2 w-4 h-4 mr-2 -ml-1"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M4 6l16 0"></path>
                    <path d="M4 12l16 0"></path>
                    <path d="M4 18l16 0"></path>
                </svg>
                Dashboard
            </x-side-link>
            <div x-data="{ open: false }">
                <x-side-button x-on:click="open = !open" :active="request()->routeIs('categories.*', 'products.*')">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-menu-2 w-4 h-4 mr-2 -ml-1" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 6l16 0"></path>
                        <path d="M4 12l16 0"></path>
                        <path d="M4 18l16 0"></path>
                    </svg>
                    Product
                </x-side-button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95">
                    <div class="bg-white border border-gray-300 w-full p-6 rounded-lg">
                        <x-nav-link :href="route('products.index')"
                            class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">
                            Product
                        </x-nav-link>
                        <x-nav-link :href="route('categories.index')"
                            class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">
                            Category Product
                        </x-nav-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
