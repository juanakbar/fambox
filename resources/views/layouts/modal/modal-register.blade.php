<x-auth-session-status class="mb-4" :status="session('status')" />
<div id="authentication-modal-register" tabindex="-1"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-7xl md:h-auto">
        <!-- Modal content -->
        <div class="flex bg-white rounded-lg shadow dark:bg-gray-700 items-center ">
            <!-- Modal body -->
            <div class="md:w-1/2 p-6">
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign up to our platform</h3>
                    <form class="space-y-6" action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="mb-2">
                            <div class="grid md:grid-cols-2 md:gap-6">
                                <div class="relative z-0 w-full group">
                                    <input type="text" name="first_name" id="first_name"
                                        class="block py-2.5 px-0 w-full text-sm text-[#00F60A] bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " />
                                    <label for="first_name"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                        First Name
                                    </label>
                                    <x-input-error :messages="$errors->get('first_name')" />
                                </div>
                                <div class="relative z-0 w-full group">
                                    <input type="text" name="last_name" id="last_name"
                                        class="block py-2.5 px-0 w-full text-sm text-[#00F60A] bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder="" />
                                    <label for="last_name"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                        Last Name
                                    </label>
                                    <x-input-error :messages="$errors->get('last_name')" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                Email</label>
                            <div class="relative mb-6">
                                <input type="email" id="email" name="email"
                                    class="block py-2.5 px-0 w-full text-sm text-[#00F60A] bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer p-2.5"
                                    placeholder="azkatd@gmail.com" autofocus>
                                <div class="absolute inset-y-0 right-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                        </path>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                    </svg>
                                </div>
                                <x-input-error :messages="$errors->get('email')" />
                            </div>

                        </div>
                        <div class="mb-2">
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <div class="relative mb-6">
                                <input type="password" id="password" name="password"
                                    class="block py-2.5 px-0 w-full text-sm text-[#00F60A] bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer p-2.5"
                                    placeholder="************">
                                <div class="absolute inset-y-0 right-0 flex items-center pl-3 pointer-events-none ">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-lock w-5 h-5 text-gray-500 dark:text-gray-400"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z">
                                        </path>
                                        <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
                                        <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
                                    </svg>

                                </div>
                                <x-input-error :messages="$errors->get('password')" />
                            </div>

                        </div>
                        <div class="mb-2">
                            <label for="password_confirmation"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password
                                Confirmation</label>
                            <div class="relative mb-6">
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="block py-2.5 px-0 w-full text-sm text-[#00F60A] bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer p-2.5"
                                    placeholder="************">
                                <div class="absolute inset-y-0 right-0 flex items-center pl-3 pointer-events-none ">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-lock w-5 h-5 text-gray-500 dark:text-gray-400"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z">
                                        </path>
                                        <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
                                        <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
                                    </svg>
                                </div>
                                <x-input-error :messages="$errors->get('password_confirmation')" />
                            </div>

                        </div>
                        <button type="submit"
                            class="w-full text-black bg-gradient-to-b from-[#6AEB1C] to-[#CCFF00] hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                            Sign up
                        </button>
                        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                            Have an Account <a href="#"
                                class="text-blue-700 hover:underline dark:text-blue-500">Login
                                Here</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="w-1/2">
                <img class="rounded-r" src="{{ asset('img/login.png') }}" alt="Image">
            </div>
        </div>
    </div>
</div>
