@php use Carbon\Carbon; @endphp
<x-guest-layout>
    <div class="w-full bg-cover bg-center" style="height:32rem; background-image: url({{ asset('img/header.png') }});">
        <div class="flex justify-center h-full sm:mt-32 mt-0">
            <div class="h-[325px] w-[510px]">
                <div class="bg-gradient-to-b from-[#C6D16680]/90 to-[#C6D16680]/15 w-full">
                    <div class="z-20 p-8 w-full h-full text-center">
                        <div class="sm:mt-10 mt-0">
                            <h1 class="text-xl font-bold text-[24px]">Welcome to FarmBox!</h1>
                            <div class="text-[40px] font-bold mt-10">
                                <h1 class="text-white drop-shadow-2xl">
                                    Organic
                                    Products Straight
                                    From the
                                    Local Farmers</h1>
                            </div>
                            <button
                                class="mt-10 w-32 border border-gray-900 bg-[#C6D166] text-white disabled:opacity-50 transition duration-300 hover:enabled:border-slate-300 hover:enabled:bg-slate-200 dark:border-slate-700 dark:bg-slate-800 dark:text-white dark:shadow dark:hover:enabled:border-slate-600 dark:hover:enabled:bg-slate-700 py-2 inline-block px-4 rounded-lg font-medium fade text-sm">
                                View More
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-white dark:bg-gray-900 my-10">
        <div class="mx-auto flex justify-center items-center">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3">
                <div class="relative block overflow-hidden rounded-xl bg-cover bg-center bg-no-repeat"
                     style="width: 344px; height: 254px; background-image: url({{ asset('img/discover1.png') }});">
                    <div class="absolute inset-0 bg-[#C6D16680]/25"></div>

                    <div class="relative flex items-start justify-between p-4 sm:p-6 lg:p-8">
                        <div class="text-white">
                            <h3 class="mb-[10px] text-5xl font-bold sm:text-4xl">DISCOVER VARIOUS BLOGS</h3>

                            <a href=""
                               class="mt-[30px] text-white bg-[#C6D16680]/100 hover:bg-[#C6D16680]/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Browse Now
                                <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="relative block overflow-hidden rounded-xl bg-cover bg-center bg-no-repeat"
                     style="width: 344px; height: 254px; background-image: url({{ asset('img/discover2.png') }});">
                    <div class="absolute inset-0 bg-[#C6D16680]/25"></div>

                    <div class="relative flex items-start justify-between p-4 sm:p-6 lg:p-8">
                        <div class="text-white">
                            <h3 class="mb-[10px] text-5xl font-bold sm:text-4xl">DISCOVER VARIOUS BLOGS</h3>

                            <a href=""
                               class="mt-[30px] text-white bg-[#C6D16680]/100 hover:bg-[#C6D16680]/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Browse Now
                                <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="relative block overflow-hidden rounded-xl bg-cover bg-center bg-no-repeat"
                     style="width: 344px; height: 254px; background-image: url({{ asset('img/discover3.png') }});">
                    <div class="absolute inset-0 bg-[#C6D16680]/25"></div>

                    <div class="relative flex items-start justify-between p-4 sm:p-6 lg:p-8">
                        <div class="text-white">
                            <h3 class="mb-[10px] text-5xl font-bold sm:text-4xl">DISCOVER VARIOUS BLOGS</h3>

                            <a href=""
                               class="mt-[30px] text-white bg-[#C6D16680]/100 hover:bg-[#C6D16680]/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Browse Now
                                <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="relative block overflow-hidden rounded-xl bg-cover bg-center bg-no-repeat"
                     style="width: 344px; height: 254px; background-image: url({{ asset('img/discover4.png') }});">
                    <div class="absolute inset-0 bg-[#C6D16680]/25"></div>

                    <div class="relative flex items-start justify-between p-4 sm:p-6 lg:p-8">
                        <div class="text-white">
                            <h3 class="mb-[10px] text-5xl font-bold sm:text-4xl">DISCOVER VARIOUS BLOGS</h3>

                            <a href=""
                               class="mt-[30px] text-white bg-[#C6D16680]/100 hover:bg-[#C6D16680]/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Browse Now
                                <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Feature Product --}}
    <div class="py-12 max-w-7xl mx-auto">
        <div class="w-full sm:p-0 p-6">
            <div class="bg-white border border-2 border-black overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-5">
                        <div class="flex justify-between items-center gap-3">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="icon icon-tabler icon-tabler-star-filled text-[#00F60A] w-4 h-4 sm:w-[39px] h-[37px]"
                                     width="39" height="37" viewBox="0 0 24 24" stroke-width="2"
                                     stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                        stroke-width="0" fill="currentColor"></path>
                                </svg>
                            </div>
                            <h1 class="uppercase font-bold sm:text-3xl text-sm"> Featured Products </h1>
                        </div>
                        <div>
                            <a class="uppercase font-bold sm:text-3xl text-[#00F60A] text-sm"> view all </a>
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-4 grid-flow-row grid-">
                        <div class="text-center bg-white row-start-1 sm:row-end-6">
                            <a href="#" class="group relative block bg-black">
                                <img alt="Developer" src="{{ asset('img/disc1.png') }}"
                                     class="absolute inset-0 h-full w-full object-cover opacity-75  transition-opacity group-hover:opacity-50"/>

                                <div class="relative p-10 sm:p-6 lg:py-32">
                                    <p class="text-[32px] font-medium uppercase tracking-widest text-[#E9FF26]">
                                        10% Off
                                    </p>

                                    <p class="text-[32px] font-bold text-white sm:text-2xl">DISCOUNTED VEGGIES
                                        AND
                                        FRUITS</p>
                                </div>
                            </a>

                        </div>
                        <div class="text-center bg-white col-start-2 sm:col-end-5 mb-10">
                            <div class="border-t border-gray-900"></div>
                        </div>
                        {{-- Product --}}
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
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>First
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Second
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Third
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Fourth
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Fifth
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </a><a
                            class="relative flex items-center justify-center rounded-xl border border-gray-100 p-4 sm:p-6 lg:p-8 border-gray-300"
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
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>First
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Second
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Third
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Fourth
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Fifth
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </a><a
                            class="relative flex items-center justify-center rounded-xl border border-gray-100 p-4 sm:p-6 lg:p-8 border-gray-300"
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
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>First
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Second
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Third
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Fourth
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
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
    </div>
    {{--    Recenly View --}}
    <div class="py-12 max-w-7xl mx-auto">
        <div class="w-full sm:p-0 p-6">
            <div class="bg-white border border-2 border-black overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-5">
                        <div class="flex justify-between items-center gap-3">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="icon icon-tabler icon-tabler-eye text-[#00F60A] w-4 h-4 sm:w-[39px] h-[37px]"
                                     width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                     stroke="currentColor" fill="none" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                    <path
                                        d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6">
                                    </path>
                                </svg>

                            </div>
                            <h1 class="uppercase font-bold sm:text-3xl text-sm"> Recently View </h1>
                        </div>
                        <div>
                            <a class="uppercase font-bold sm:text-3xl text-[#00F60A] text-sm"> view all </a>
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-4 grid-flow-row grid-">
                        <div class="text-center bg-white row-start-1 sm:row-end-6">
                            <a href="#" class="group relative block bg-black">
                                <img alt="Developer" src="{{ asset('img/disc1.png') }}"
                                     class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50"/>

                                <div class="relative p-10 sm:p-6 lg:py-32">
                                    <p class="text-[32px] font-medium uppercase tracking-widest text-[#E9FF26]">
                                        10% Off
                                    </p>

                                    <p class="text-[32px] font-bold text-white sm:text-2xl">DISCOUNTED VEGGIES
                                        AND
                                        FRUITS</p>
                                </div>
                            </a>

                        </div>
                        <div class="text-center bg-white col-start-2 sm:col-end-5 mb-10">
                            <div class="border-t border-gray-900"></div>
                        </div>
                        {{-- Product --}}
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
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>First
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Second
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Third
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Fourth
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
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
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>First
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Second
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Third
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Fourth
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
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
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>First
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Second
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Third
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Fourth
                                            star</title>
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>
                                    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"
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
    </div>
    {{--    Blog --}}
    <div class="py-12 max-w-7xl mx-auto">
        <div class="w-full sm:p-0 p-6">
            <div class="bg-white border border-2 border-black overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-5 ">
                        <div class="flex justify-between items-center gap-3">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="icon icon-tabler icon-tabler-article text-[#00F60A] w-4 h-4 sm:w-[39px] h-[37px]"
                                     width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                     stroke="currentColor" fill="none" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z">
                                    </path>
                                    <path d="M7 8h10"></path>
                                    <path d="M7 12h10"></path>
                                    <path d="M7 16h10"></path>
                                </svg>
                            </div>
                            <h1 class="uppercase font-bold sm:text-3xl text-sm"> Featured Products </h1>
                        </div>
                        <div>
                            <a class="uppercase font-bold sm:text-3xl text-[#00F60A] text-sm"> view all </a>
                        </div>
                    </div>
                    <div class="border-t border-gray-900 mb-5"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

                    <div class="max-w-sm p-6 bg-white">

                        <img class="h-auto max-w-lg rounded-lg" src="{{ asset('img/blog1.png') }}"
                             alt="image description">
                        <div class="flex justify-start items-center mt-2 text-xs text-gray-500">
                            <div class="flex justify-between items-center gap-3">
                                <div class="flex justify-between gap-2 items-center">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-tabler icon-tabler-calendar-event w-4 h-4" width="24"
                                             height="24" viewBox="0 0 24 24" stroke-width="2"
                                             stroke="currentColor" fill="none" stroke-linecap="round"
                                             stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                            </path>
                                            <path d="M16 3l0 4"></path>
                                            <path d="M8 3l0 4"></path>
                                            <path d="M4 11l16 0"></path>
                                            <path d="M8 15h2v2h-2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span> {{ Carbon::now()->format('h m Y') }} </span>
                                    </div>
                                </div>
                                <div class="flex justify-between gap-2 items-center">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-tabler icon-tabler-message w-4 h-4" width="24"
                                             height="24" viewBox="0 0 24 24" stroke-width="2"
                                             stroke="currentColor" fill="none" stroke-linecap="round"
                                             stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M8 9h8"></path>
                                            <path d="M8 13h6"></path>
                                            <path
                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span> 10 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Noteworthy technology acquisitions 2021</h5>
                        </a>

                        <a href="#"
                           class="text-white bg-[#C6D16680]/100 hover:bg-[#C6D16680]/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Baca
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="max-w-sm p-6 bg-white">

                        <img class="h-auto max-w-lg rounded-lg" src="{{ asset('img/blog1.png') }}"
                             alt="image description">
                        <div class="flex justify-start items-center mt-2 text-xs text-gray-500">
                            <div class="flex justify-between items-center gap-3">
                                <div class="flex justify-between gap-2 items-center">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-tabler icon-tabler-calendar-event w-4 h-4" width="24"
                                             height="24" viewBox="0 0 24 24" stroke-width="2"
                                             stroke="currentColor" fill="none" stroke-linecap="round"
                                             stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                            </path>
                                            <path d="M16 3l0 4"></path>
                                            <path d="M8 3l0 4"></path>
                                            <path d="M4 11l16 0"></path>
                                            <path d="M8 15h2v2h-2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span> {{ Carbon::now()->format('h m Y') }} </span>
                                    </div>
                                </div>
                                <div class="flex justify-between gap-2 items-center">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-tabler icon-tabler-message w-4 h-4" width="24"
                                             height="24" viewBox="0 0 24 24" stroke-width="2"
                                             stroke="currentColor" fill="none" stroke-linecap="round"
                                             stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M8 9h8"></path>
                                            <path d="M8 13h6"></path>
                                            <path
                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span> 10 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Noteworthy technology acquisitions 2021</h5>
                        </a>

                        <a href="#"
                           class="text-white bg-[#C6D16680]/100 hover:bg-[#C6D16680]/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Baca
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="max-w-sm p-6 bg-white">

                        <img class="h-auto max-w-lg rounded-lg" src="{{ asset('img/blog1.png') }}"
                             alt="image description">
                        <div class="flex justify-start items-center mt-2 text-xs text-gray-500">
                            <div class="flex justify-between items-center gap-3">
                                <div class="flex justify-between gap-2 items-center">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-tabler icon-tabler-calendar-event w-4 h-4" width="24"
                                             height="24" viewBox="0 0 24 24" stroke-width="2"
                                             stroke="currentColor" fill="none" stroke-linecap="round"
                                             stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                            </path>
                                            <path d="M16 3l0 4"></path>
                                            <path d="M8 3l0 4"></path>
                                            <path d="M4 11l16 0"></path>
                                            <path d="M8 15h2v2h-2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span> {{ Carbon::now()->format('h m Y') }} </span>
                                    </div>
                                </div>
                                <div class="flex justify-between gap-2 items-center">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-tabler icon-tabler-message w-4 h-4" width="24"
                                             height="24" viewBox="0 0 24 24" stroke-width="2"
                                             stroke="currentColor" fill="none" stroke-linecap="round"
                                             stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M8 9h8"></path>
                                            <path d="M8 13h6"></path>
                                            <path
                                                d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <span> 10 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Noteworthy technology acquisitions 2021</h5>
                        </a>

                        <a href="#"
                           class="text-white bg-[#C6D16680]/100 hover:bg-[#C6D16680]/80 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Baca
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
