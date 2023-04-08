<x-app-layout>
    <div class="mx-auto space-y-6">
        <div class="p-4 sm:p-8 ">
            <div class="w-full mt-3">
                <!-- Start coding here -->
                {{--                Header --}}
                <h5 class="font-bold text-black text-2xl">Category Product</h5>
                <div class="border-t border-gray-900 my-2"></div>
                {{--                End Header --}}

                {{--                Action --}}
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
                        <button data-drawer-target="tambah-category" data-drawer-show="tambah-category"
                            aria-controls="tambah-category"
                            class="w-full sm:w-auto border border-gray-900 bg-[#C6D166] text-black disabled:opacity-50 transition duration-300 hover:enabled:border-slate-300 hover:enabled:bg-slate-200 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:shadow dark:hover:enabled:border-slate-600 dark:hover:enabled:bg-slate-700 py-2 inline-block px-4 rounded-lg font-medium fade text-sm">
                            Tambah Category
                        </button>
                    </div>
                </div>
                {{--                end Action --}}

                <div class="sm:p-8 p-0 ">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        @if ($categories->count() === 0)
                            <x-empty>

                            </x-empty>
                        @else
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Nama Category
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Link
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Jenis Category
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $item)
                                        @include('categories.partials.edit')
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white uppercase">
                                                {{ $item->name }}
                                            </th>
                                            <td class="px-6 py-4">
                                                <a href="{{ route('categories.show', $item->slug) }}"
                                                    class="text-green-400 hover:underline">
                                                    {{ route('categories.show', $item->slug) }}
                                                </a>
                                            </td>
                                            <td class="px-6 py-4 uppercase">
                                                {{ $item->status }}
                                            </td>
                                            <td class="flex items-center px-6 py-4 space-x-3">
                                                <button data-drawer-target="edit-category-{{ $item->id }}"
                                                    data-drawer-show="edit-category-{{ $item->id }}"
                                                    aria-controls="edit-category-{{ $item->id }}"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                    Edit
                                                </button>
                                                <form action="{{ route('categories.destroy', $item->slug) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                                        Remove
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif

                    </div>
                </div>


            </div>
        </div>
    </div>
    {{-- Drawer create --}}
    @include('categories.partials.create')
    {{-- End Drawer create --}}
</x-app-layout>
