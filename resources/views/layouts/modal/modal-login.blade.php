<x-auth-session-status class="mb-4" :status="session('status')" />
<div id="authentication-modal-login" tabindex="-1"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-7xl md:h-auto">
        <!-- Modal content -->
        <div class="flex bg-white rounded-lg shadow dark:bg-gray-700 items-center">
            <!-- Modal body -->
            <div class="md:w-1/2 px-8 md:px-16">
                <div class="px-6 py-6 lg:px-6">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>
                    <form class="space-y-6" action="{{ route('login') }}" method="post">
                        @csrf
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
                            </div>
                            <x-input-error :messages="$errors->get('email')" />
                        </div>
                        <div class="mb-2">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Password
                            </label>
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
                            </div>
                            <x-input-error :messages="$errors->get('password')" />
                        </div>

                        <div class="flex justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox" value=""
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
                                </div>
                                <label for="remember"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                                    me</label>
                            </div>
                            <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost
                                Password?</a>
                        </div>
                        <button type="submit"
                            class="w-full text-black bg-gradient-to-b from-[#6AEB1C] to-[#CCFF00] hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                            Sign in
                        </button>
                        <div class="mt-6 grid grid-cols-3 items-center text-gray-400">
                            <hr class="border-gray-400">
                            <p class="text-center text-sm">OR</p>
                            <hr class="border-gray-400">
                        </div>
                        <div class="text-center">
                            <button type="button"
                                class="w-full text-white bg-[#24292F] hover:bg-[#24292F]/90 focus:ring-4 focus:outline-none focus:ring-[#24292F]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center justify-center dark:focus:ring-gray-500 dark:hover:bg-[#050708]/30 mr-2 mb-2">
                                <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab"
                                    data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 488 512">
                                    <path fill="currentColor"
                                        d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
                                    </path>
                                </svg>
                                Sign in with Google
                            </button>
                        </div>
                        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                            Not registered? <a href="#"
                                class="text-blue-700 hover:underline dark:text-blue-500">Create
                                account</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="w-1/2 md:block hidden">
                <img class="rounded-r" src="{{ asset('img/login.png') }}" alt="Image">
            </div>
        </div>
    </div>
</div>
