<x-guest-layout>
    <div class="w-full">
        <div class="bg-cover bg-center hidden sm:block bg-no-repeat"
             style="height:32rem; background-image: url({{ asset('img/shop.png') }});">
            <div class="flex justify-center h-full sm:mt-32 mt-0">
                <div class="h-full w-full">
                    <div class="bg-[#C6D16680]/50 w-full h-full">
                        <div class="z-20 p-8 w-full text-center">
                            <div class="sm:mt-10 mt-0">
                                <div class="text-[40px] font-bold mt-10 flex justify-center items-center sm:mt-44">
                                    <h1 class="text-white drop-shadow-2xl">
                                        Checkout
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-24 sm:mt-24 sm:py-3">
            <div class="max-w-7xl mx-auto ">
                <div class="bg-white overflow-hidden">
                    <div class="p-6 text-gray-900">
                        <section class="bg-white dark:bg-gray-900">
                            <div class="container mx-auto">
                                <div class="lg:flex lg:-mx-2">
                                    <div class="space-y-3 lg:w-3/5 lg:px-2 lg:space-y-4 ">
                                        <h1 class="text-2xl text-gray-700 font-bold">
                                            Detail Pembayaran
                                        </h1>
                                        <div class="w-full">
                                            <form action="">
                                                <div class="mb-6">
                                                    <x-input-label for="name" value="Nama Penerima"/>
                                                    <x-text-input id="name" class="block mt-1 w-full"
                                                                  type="text" name="name" :value="old('name')" required
                                                                  autofocus placeholder="Azka Tsawaab Dhafin"/>
                                                </div>

                                                <div class="mb-6">
                                                    <x-input-label for="phone" value="Nomor Telepon"/>
                                                    <x-text-input id="phone" class="block mt-1 w-full"
                                                                  type="text" name="phone" :value="old('phone')"
                                                                  required
                                                                  autofocus placeholder="081234567890"/>
                                                </div>

                                                <div class="mb-6">
                                                    <x-input-label for="address" value="Alamat"/>
                                                    <x-text-input id="address" class="block mt-1 w-full"
                                                                  type="text" name="address" :value="old('address')"
                                                                  required
                                                                  autofocus placeholder="Jl. Raya Cibaduyut No. 123"/>
                                                </div>

                                            </form>
                                        </div>
                                        <p class="text-lg text-gray-700 font-medium ">Detail Pembelian</p>
                                        @foreach ($carts as $cart)
                                            <div class="sm:flex justify-between items-center w-full inline ">
                                                <div class="sm:flex inline justify-center items-center gap-3 ">
                                                    <div class="rounded-lg border border-gray-300 overflow-hidden my-6">
                                                        <img
                                                            class="object-cover object-center overflow-hidden sm:h-24 h-auto w-full"
                                                            src="{{ asset('storage/' . $cart->product->image) }}"
                                                            alt="Image">
                                                    </div>
                                                    <div>
                                                        <p class="text-lg font-bold text-black">
                                                            {{ $cart->product->name }}
                                                            /{{ $cart->product->satuan }}</p>
                                                        <p class="text-lg font-bold text-gray-500">
                                                            @currency($cart->product->price)</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="text-lg font-bold text-black">Quantity</p>
                                                    <p class="text-lg font-bold text-gray-500">{{ $cart->quantity }}</p>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>

                                    <div class="mt-6 lg:mt-0 lg:px-2 lg:w-2/5">
                                        <div class="w-full sm:Sp-6 p-0">
                                            <div
                                                class="bg-white shadow-lg rounded-lg w-full border-gray-900 border p-6">
                                                <p class="font-bold text-gray-700 text-2xl">Ringkasan Pembelian</p>
                                                <div class="w-full flex justify-center items-center px-12 mb-5">
                                                    <div class="w-full h-px bg-gray-500 mt-5"></div>
                                                </div>
                                                <div class="flex justify-between items-center">
                                                    <p class="text-lg font-bold text-gray-700">Product</p>
                                                    <p class="text-lg font-bold text-gray-700">Total</p>
                                                </div>
                                                @foreach ($carts as $cart)
                                                    <div
                                                        class="flex justify-between items-center tracking-wide leading-5">
                                                            <?php $total =
                                                                $cart->quantity *
                                                                $cart->product
                                                                    ->price; ?>
                                                        <p class="text-lg font-bold text-gray-500 leading-5">
                                                            {{ $cart->product->name }}
                                                            ({{ $cart->quantity }}{{ $cart->product->satuan }})
                                                        </p>
                                                        <p class="text-lg font-bold text-gray-500">
                                                            @currency($total)</p>
                                                    </div>
                                                @endforeach

                                                <div class="w-full flex justify-center items-center px-12 mb-5">
                                                    <div class="w-full h-px bg-gray-500 mt-5"></div>
                                                </div>
                                                <div class="flex justify-between items-center tracking-wide leading-5">
                                                    <?php $subTotal =
                                                        $cart->quantity *
                                                        $cart->product
                                                            ->price; ?>
                                                    <p class="text-lg font-bold text-gray-700 leading-5">Subtotal</p>
                                                    <p class="text-lg font-bold text-gray-700">
                                                        @currency($totalPriceProduct)</p>
                                                </div>
                                                <div class="flex justify-between items-center tracking-wide leading-5">
                                                    <?php $biaya_layanan = 4500; ?>
                                                    <p class="text-lg font-bold text-gray-700 leading-5">Biaya
                                                        Layanan</p>
                                                    <p class="text-lg font-bold text-gray-700">
                                                        @currency($biaya_layanan)</p>
                                                </div>
                                                <div class="flex justify-between items-center tracking-wide leading-5">
                                                    <?php $biaya_pengiriman = 9000; ?>
                                                    <p class="text-lg font-bold text-gray-700 leading-5">Biaya
                                                        Pengiriman</p>
                                                    <p class="text-lg font-bold text-gray-700">
                                                        @currency($biaya_pengiriman)
                                                    </p>
                                                </div>
                                                <div class="flex justify-between items-center tracking-wide leading-5">
                                                    <?php $totalBeforeDiscount =
                                                        $totalPriceProduct +
                                                        $biaya_layanan +
                                                        $biaya_pengiriman; ?>
                                                    <p class="text-lg font-bold text-gray-700 leading-5">Biaya
                                                        Pengiriman</p>
                                                    <p class="text-lg font-bold text-gray-700">
                                                        @currency($totalBeforeDiscount)
                                                    </p>
                                                </div>


                                                <div class="w-full flex justify-center items-center px-12 mb-5">
                                                    <div class="w-full h-px bg-gray-500 mt-5"></div>
                                                </div>
                                                <div class="flex justify-between items-center tracking-wide leading-5">
                                                    <?php $grandTotal =
                                                        $totalPriceProduct -
                                                        $discount; ?>
                                                    <p class="text-lg font-bold text-gray-700 leading-5">Subtotal</p>
                                                    <p class="text-lg font-bold text-red-700">
                                                        @currency($grandTotal)</p>
                                                </div>

                                                <div class="w-full flex justify-center items-center px-12 mb-5">
                                                    <div class="w-full h-px bg-gray-500 mt-5"></div>
                                                </div>
                                                <div class="flex justify-between items-center mb-3">
                                                    <select id="countries"
                                                            class="text-gray-900 text-sm rounded-lg block w-full p-2.5 border-none">
                                                        <option selected>Metode Pembayaran</option>
                                                        <option value="tf_bank">Transfer Bank</option>
                                                        <option value="e-wallet">E-Wallet</option>
                                                        <option value="cod">Bayar Ditempat</option>
                                                    </select>
                                                </div>
                                                <div class="flex justify-between items-center mb-3">
                                                    <select id="countries"
                                                            class="text-gray-900 text-sm rounded-lg block w-full p-2.5 border-none">
                                                        <option selected>Voucher</option>
                                                        <option value="farmdisc">DicsFarm%</option>
                                                    </select>
                                                </div>
                                                <div class="flex justify-center items-center">
                                                    <x-primary-button
                                                        class="block sm:mt-0 py-2 mt-3 border border-gray-900 bg-[#C6D166] text-black disabled:opacity-50 transition duration-300 hover:enabled:border-[#C6D166]/30 hover:enabled:bg-[#C6D166]/80  dark:text-white  inline-block px-4 rounded-lg font-medium fade text-sm"
                                                        type="submit">
                                                        Bayar
                                                    </x-primary-button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
