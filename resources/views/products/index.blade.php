<x-app-layout>
    <div class="mx-auto space-y-6">
        <div class="p-4 sm:p-8 ">
            <div class="w-full mt-3">
                <h5 class="font-bold text-black text-2xl">Product</h5>
                <div class="border-t border-gray-900 my-2"></div>
                <div class="sm:flex justify-between items-center inline gap-6 p-8">
                    <div class="sm:w-2/4 w-full sm:mb-0 mb-3">
                        <form>
                            <label for="default-search"
                                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                                <input type="search" id="default-search"
                                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Search Mockups, Logos..." required>
                                <button type="submit"
                                    class="text-white absolute right-2.5 bottom-2.5 bg-[#C6D166] hover:bg-[#C6D16650]/50 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">
                                    Search
                                </button>
                            </div>
                        </form>

                    </div>
                    <div class="sm:w-3/4 w-full sm:mb-0 mb-3 flex justify-end">
                        <button data-drawer-target="create-product" data-drawer-show="create-product"
                            aria-controls="create-product"
                            class="w-full sm:w-auto border border-gray-900 bg-[#C6D166] text-black disabled:opacity-50 transition duration-300 hover:enabled:border-slate-300 hover:enabled:bg-slate-200 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:shadow dark:hover:enabled:border-slate-600 dark:hover:enabled:bg-slate-700 py-2 inline-block px-4 rounded-lg font-medium fade text-sm">
                            Tambah Product
                        </button>
                    </div>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                        @foreach ($products as $item)
                            @include('products.partials.edit')
                            <div
                                class="relative flex items-center justify-center rounded-xl border border-gray-100 p-4 sm:p-6 lg:p-8 border-gray-300">
                                <div class="pt-4 text-gray-500">
                                    <div class="flex items-center justify-center">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="Product">
                                        <span
                                            class="absolute top-4 right-4 bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">
                                            {{ $item->category->name }}
                                        </span>

                                    </div>

                                    <h3 class="mt-4 text-sm font-bold text-gray-900 sm:text-sm text-center">
                                        {{ $item->name }}/{{ $item->satuan }}
                                    </h3>
                                    <h3 class="text-lg font-bold text-gray-900/50 sm:text-xl text-center">
                                        @currency($item->price)
                                    </h3>
                                    <div class="flex items-center mt-2.5 justify-center gap-3">
                                        <div>
                                            <button data-drawer-target="edit-product-{{ $item->id }}"
                                                data-drawer-show="edit-product-{{ $item->id }}"
                                                aria-controls="edit-product-{{ $item->id }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                Edit
                                            </button>
                                        </div>
                                        <div>
                                            <form action="{{ route('products.destroy', $item->slug) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                                    Remove
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <button
                            class="relative flex items-center justify-center rounded-xl border border-gray-100 border-gray-300"
                            data-drawer-target="create-product" data-drawer-show="create-product"
                            aria-controls="create-product">
                            <div class="pt-4 text-gray-500">
                                <div class="flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-plus text-xl w-12 h-12 text-gray-500"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 5l0 14"></path>
                                        <path d="M5 12l14 0"></path>
                                    </svg>
                                </div>

                                <h3 class="mt-4 text-2xl font-bold text-gray-900 sm:text-2xl text-center">
                                    Tambah Product
                                </h3>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('products.partials.create')


</x-app-layout>
