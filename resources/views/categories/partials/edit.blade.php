<div id="edit-category-{{ $item->id }}"
    class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800"
    tabindex="-1" aria-labelledby="tambah-category-label">
    <h5 id="tambah-category-label"
        class="inline-flex items-center mb-6 text-base font-semibold text-gray-500 uppercase dark:text-gray-400">
        <svg class="w-5 h-5 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                clip-rule="evenodd"></path>
        </svg>
        Edit Category {{ $item->name }}
    </h5>
    <button type="button" data-drawer-hide="edit-category-{{ $item->id }}"
        aria-controls="edit-category-{{ $item->id }}"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Close menu</span>
    </button>
    <form action="{{ route('categories.update', $item->slug) }}" method="post" class="mb-6">
        @method('PUT')
        @csrf
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                Category</label>
            <input type="text" id="name" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Buah" value="{{ old('name', $item->name) }}">
        </div>
        <button type="submit"
            class="text-white flex w-full right-2.5 bottom-2.5 bg-[#C6D166] hover:bg-[#C6D16650]/50 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">

            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy w-5 h-5 mr-2"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                <path d="M14 4l0 4l-6 0l0 -4"></path>
            </svg>
            Simpan
        </button>
    </form>
</div>
