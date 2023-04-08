<x-guest-layout>
    <div class="w-full">
        <div class="bg-cover bg-center hidden sm:block"
            style="height:32rem; background-image: url({{ asset('img/single.png') }});">
            <div class="flex justify-center h-full sm:mt-32 mt-0">
                <div class="h-full w-full">
                    <div class="bg-[#C6D16680]/50 w-full h-full">
                        <div class="z-20 p-8 w-full text-center">
                            <div class="sm:mt-10 mt-0">
                                <div class="text-[40px] font-bold mt-10 flex justify-center items-center sm:mt-44">
                                    <h1 class="text-white drop-shadow-2xl">
                                        {{ $product->name }}
                                    </h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-24 h-screen">
            <div class="max-w-7xl mx-auto ">
                <div class="bg-white overflow-hidden">
                    <div class="p-6 text-gray-900">
                        <section class="bg-white dark:bg-gray-900">
                            <div class="container mx-auto">
                                <div class="lg:flex lg:-mx-2">
                                    <div class="space-y-3 lg:w-4/5 lg:px-2 lg:space-y-4">
                                        <div class="w-full">
                                            <img class="h-full w-full max-w-[800] rounded-lg border border-gray-300"
                                                src="{{ asset('storage/' . $product->image) }}" alt="image description">
                                            <div class="sm:flex justify-between items-center hidden w-full mt-3">
                                                <img class="h-32 sm:h-auto max-w-[800] sm:max-w-sm rounded-lg mb-3 border border-gray-300"
                                                    src="{{ asset('storage/' . $product->image) }}"
                                                    alt="image description"> <img
                                                    class="h-32 sm:h-auto max-w-[800] sm:max-w-sm rounded-lg mb-3 border border-gray-300"
                                                    src="{{ asset('storage/' . $product->image) }}"
                                                    alt="image description"> <img
                                                    class="h-32 sm:h-auto max-w-[800] sm:max-w-sm rounded-lg mb-3 border border-gray-300"
                                                    src="{{ asset('storage/' . $product->image) }}"
                                                    alt="image description">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-6 lg:mt-0 lg:px-2 lg:w-3/5">
                                        <h1 class="font-bold text-[40px] text-black">{{ $product->name }}</h1>
                                        <div class="flex mt-2.5 items-center gap-3">
                                            <div class="flex">
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>First
                                                        star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Second
                                                        star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Third
                                                        star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Fourth
                                                        star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg aria-hidden="true" class="w-5 h-5 text-yellow-300"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>Fifth
                                                        star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="text-red-700">(18) Review</p>
                                            </div>
                                        </div>

                                        <p class="mt-3 text-justify">{{ $product->description }}</p>


                                        <form action="{{ route('cart.store') }}" method="post">
                                            <div class="sm:flex inline items-center  gap-3 mt-5">
                                                @csrf
                                                <div class="">
                                                    <x-text-input class="py-2 w-full sm:mt-0 mt-3 hidden"
                                                        name="product_id" id="product_id" value="{{ $product->id }}"
                                                        type="number" />

                                                    <div class="custom-number-input h-10 sm:w-32 w-full">
                                                        <div
                                                            class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                                            <button data-action="decrement" type="button"
                                                                class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                                                <span class="m-auto text-2xl font-thin">−</span>
                                                            </button>
                                                            <input type="number"
                                                                class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none"
                                                                name="quantity" id="quantity" value="0"></input>
                                                            <button data-action="increment" type="button"
                                                                class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                                                <span class="m-auto text-2xl font-thin">+</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button type="submit"
                                                        class="w-full sm:mt-0 py-2 mt-3 border border-gray-900 bg-[#C6D166] text-black disabled:opacity-50 transition duration-300 hover:enabled:border-[#C6D166]/30 hover:enabled:bg-[#C6D166]/80  dark:text-white  inline-block px-4 rounded-lg font-medium fade text-sm">
                                                        Add to cart
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </section>


                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
        <style>
            input[type='number']::-webkit-inner-spin-button,
            input[type='number']::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            .custom-number-input input:focus {
                outline: none !important;
            }

            .custom-number-input button:focus {
                outline: none !important;
            }

            .custom-number-input {
                outline: none !important;
            }
        </style>
    @endpush

    @push('js')
        <script>
            function decrement(e) {
                const btn = e.target.parentNode.parentElement.querySelector(
                    'button[data-action="decrement"]'
                );
                const target = btn.nextElementSibling;
                let value = Number(target.value);
                value--;
                target.value = value;
            }

            function increment(e) {
                const btn = e.target.parentNode.parentElement.querySelector(
                    'button[data-action="decrement"]'
                );
                const target = btn.nextElementSibling;
                let value = Number(target.value);
                value++;
                target.value = value;
            }

            const decrementButtons = document.querySelectorAll(
                `button[data-action="decrement"]`
            );

            const incrementButtons = document.querySelectorAll(
                `button[data-action="increment"]`
            );

            decrementButtons.forEach(btn => {
                btn.addEventListener("click", decrement);
            });

            incrementButtons.forEach(btn => {
                btn.addEventListener("click", increment);
            });
        </script>
    @endpush
</x-guest-layout>
