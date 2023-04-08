<x-guest-layout>
    <div class="w-full">
        <div class="bg-cover bg-center hidden sm:block"
            style="height:32rem; background-image: url({{ asset('img/shop.png') }});">
            <div class="flex justify-center h-full sm:mt-32 mt-0">
                <div class="h-full w-full">
                    <div class="bg-[#C6D16680]/50 w-full h-full">
                        <div class="z-20 p-8 w-full text-center">
                            <div class="sm:mt-10 mt-0">
                                <div class="text-[40px] font-bold mt-10 flex justify-center items-center sm:mt-44">
                                    <h1 class="text-white drop-shadow-2xl">
                                        Shopping Cart
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
                    <form action="{{ route('checkout.store') }}" method="post">
                        @csrf
                        <div class="p-6 text-gray-900">
                            <section class="bg-white dark:bg-gray-900">
                                <div class="container mx-auto">
                                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                            <thead
                                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th scope="col" class="p-4">

                                                    </th>
                                                    <th scope="col" class="px-6 py-3">
                                                        Product
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">
                                                        Price
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">
                                                        Quantity
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">
                                                        Total
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($carts as $item)
                                                    <tr
                                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                        <td class="w-4 p-4">
                                                            <div class="flex items-center">
                                                                <input id="product_ids" type="checkbox"
                                                                    value="{{ $item->id }}" name="producst_ids[]"
                                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                                <label for="product_ids"
                                                                    class="sr-only">checkbox</label>
                                                            </div>
                                                        </td>
                                                        <th scope="row"
                                                            class="px-6 py-24 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <div class="flex items-center">
                                                                <div>
                                                                    <img src="{{ asset('storage/' . $item->product->image) }}"
                                                                        alt="{{ $item->product->name }}">
                                                                </div>
                                                                <div>
                                                                    <h1 class="text-2xl font-bold">
                                                                        {{ $item->product->name }}</h1>
                                                                </div>

                                                            </div>
                                                            <div class="mt-3 flex items-center gap-3">
                                                                <div>
                                                                    <button type="submit"
                                                                        class="w-full sm:mt-0 py-2 mt-3 border border-gray-900 bg-[#C6D166] text-black disabled:opacity-50 transition duration-300 hover:enabled:border-[#C6D166]/30 hover:enabled:bg-[#C6D166]/80  dark:text-white  inline-block px-4 rounded-lg font-medium fade text-sm">
                                                                        Pindahkan ke whislist
                                                                    </button>
                                                                </div>
                                                                <div>
                                                                    <form
                                                                        action="{{ route('cart.destroy', $item->id) }}"
                                                                        method="post">
                                                                        {{--                                                                    @method('DELETE') --}}
                                                                        @csrf

                                                                        <button
                                                                            onclick="$(this).closest('form').submit()"
                                                                            class="w-full sm:mt-0 py-2 mt-3 border border-gray-900 bg-red-500 text-black disabled:opacity-50 transition duration-300 hover:enabled:border-red-300 hover:enabled:bg-red-800/80  dark:text-white  inline-block px-4 rounded-lg font-medium fade text-sm">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                class="icon icon-tabler icon-tabler-trash text-white"
                                                                                width="20" height="20"
                                                                                viewBox="0 0 24 24" stroke-width="2"
                                                                                stroke="currentColor" fill="none"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path stroke="none" d="M0 0h24v24H0z"
                                                                                    fill="none"></path>
                                                                                <path d="M4 7l16 0"></path>
                                                                                <path d="M10 11l0 6"></path>
                                                                                <path d="M14 11l0 6"></path>
                                                                                <path
                                                                                    d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                                                </path>
                                                                                <path
                                                                                    d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
                                                                                </path>
                                                                            </svg>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            <p class="text-black text-lg">
                                                                @currency($item->product->price)</p>
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <p class="text-black text-lg">
                                                                {{ $item->quantity }}
                                                            </p>
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            <p class="text-black text-lg">
                                                                @currency($item->getTotalPriceAttribute())
                                                            </p>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>

                            <section class="container mx-auto h-screen mt-10">
                                <div class="grid grid-cols-1 md:grid-cols-2">
                                    <div class="sm:w-2/3 w-full ">
                                        <div class="h-auto">
                                            <div class="w-full">
                                                <a href="{{ route('shop.index') }}"
                                                    class="w-full flex justify-center text-sm sm:text-3xl py-4 w-full h-full text-white bg-gradient-to-r from-[#00FF19] to-[#687858] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg px-5 text-center mr-2 mb-2">
                                                    Add More
                                                </a>
                                                <h1 class="text-bold text-lg sm:text-3xl font-bold mt-3">Discount
                                                    Code</h1>

                                            </div>

                                        </div>
                                        <div class="flex justify-between mt-3 w-full">
                                            <a href="{{ route('shop.index') }}"
                                                class="w-full flex justify-center text-sm sm:text-lg py-4 w-full h-full text-black border border-gray-900  focus:ring-4 focus:outline-none focus:ring-green-300  font-medium rounded-lg px-5 text-center mr-2 mb-2">
                                                Enter Code
                                            </a>
                                            <a href="{{ route('shop.index') }}"
                                                class="w-full flex justify-center text-sm sm:text-lg py-4 w-full h-full text-white bg-gradient-to-r from-[#00FF19] to-[#687858] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg px-5 text-center mr-2 mb-2">
                                                Apply Code
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sm:w-3/3 w-full">
                                        <div
                                            class="bg-white p-6 border border-gray-200 rounded-lg shadow-md w-full h-full">
                                            <div class="divide-y divide-gray-900">
                                                <div class="mb-6">
                                                    <div class="flex justify-between">
                                                        <h1 class="text-bold text-lg sm:text-3xl font-bold">Cart
                                                            Totals</h1>
                                                    </div>
                                                    <div class="flex justify-between mt-3">
                                                        <h1
                                                            class="text-bold text-lg sm:text-lg text-gray-500 font-medium">
                                                            Subtotal</h1>
                                                        <h1
                                                            class="text-bold text-lg sm:text-lg  text-gray-500 font-medium">
                                                            @currency($totalPrice)
                                                        </h1>
                                                    </div>
                                                    <div class="flex justify-between mt-3">
                                                        <h1
                                                            class="text-bold text-lg sm:text-lg text-gray-500 font-medium">
                                                            Discount 10%</h1>
                                                        <h1
                                                            class="text-bold text-lg sm:text-lg text-red-500 font-medium">

                                                            - @currency($discount)
                                                        </h1>
                                                    </div>
                                                </div>
                                                <div class="mt-6">
                                                    <div class="flex justify-between mt-6">
                                                        <h1
                                                            class="text-bold text-lg sm:text-lg text-gray-500 font-medium">
                                                            Total</h1>
                                                        <h1
                                                            class="text-bold text-lg sm:text-lg  text-gray-500 font-medium">
                                                            @currency($totalPrice - $discount)
                                                        </h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <x-primary-button onclick="$(this).closest('form').submit()"
                                                class="mt-6 flex justify-center w-full text-sm sm:text-lg py-2.5 text-white bg-gradient-to-r from-[#00FF19] to-[#687858] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg px-5 text-center mr-2 mb-2">
                                                Checkout
                                            </x-primary-button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </form>
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
