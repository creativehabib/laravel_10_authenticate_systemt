<nav class=" sticky left-0 top-0 z-50 w-screen bg-white shadow-md border-b border-gray-200 dark:border-slate-700 dark:bg-gray-900">
    <div class="px-6">
        <div class="relative flex h-[48px] items-center justify-between">
            <div class="flex flex-1 items-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <div id="hamburger" class=" mr-4 flex text-neutral-400" data-te-sidenav-toggle-ref="" data-te-target="#sidenav-main" aria-expanded="false">
                        <a href="#" class="text-neutral-400">
                            <svg fill="hsl(224, 7.2%, 40%)" viewBox="0 0 100 80" width="20" height="20">
                                <rect width="80" height="14"></rect>
                                <rect y="30" width="80" height="14"></rect>
                                <rect y="60" width="80" height="14"></rect>
                            </svg>
                        </a>
                    </div>

                    <a href="{{route('home')}}" class="flex items-center justify-center rounded-md pr-6 text-lg font-medium dark:text-neutral-100" aria-current="page">
                        Laravel Tailwindcss Project
                    </a>

                </div>

                <div id="te-search-container" class="relative hidden lg:flex lg:items-center">
                    <form class="relative mb-0 flex flex-wrap items-stretch">
                        <style>
                            #te-search-input:focus-within {
                                box-shadow: inset 0 0 0 1px #3b71ca;
                            }
                        </style>
                        <input id="te-search-input" autocomplete="off" type="search" class="focus:shadow-te-blue relative m-0 inline-block w-[1%] min-w-[225px] flex-auto rounded-full border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-1 text-base font-normal text-gray-700 outline-none transition duration-300 ease-in-out focus:border-blue-600 focus:text-gray-700 dark:border-neutral-600 dark:text-gray-200 dark:placeholder:text-gray-200" placeholder="Search here any thing">
                        <span class="flex items-center whitespace-nowrap rounded px-3 py-1.5 text-center text-base font-normal text-gray-700 dark:text-gray-200">
                    <span class="text-neutral-400" id="te-search-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                      </svg>
                    </span>
                  </span>
                    </form>
                </div>


                <div class="ml-auto hidden items-center sm:flex">
                    <div class="flex">


                        <a href="{{route('home')}}" class="hidden py-2 text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 sm:block sm:px-2 [&amp;.active]:text-black/90 dark:[&amp;.active]:text-zinc-400">Home</a>
                        @auth
                        <a
                            href="{{route('dashboard')}}"
                            class="hidden py-2 text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:block lg:px-2 [&amp;.active]:text-black/90 dark:[&amp;.active]:text-zinc-400">
                            Dashboard
                        </a>

                        @endauth
                        <a
                            href="{{route('post')}}"
                            class="hidden py-2 text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:block lg:px-2 [&amp;.active]:text-black/90 dark:[&amp;.active]:text-zinc-400">
                            Post
                        </a>
                        @guest

                        <a
                            href="{{route('login')}}"
                            class="hidden py-2 text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:block lg:px-2 [&amp;.active]:text-black/90 dark:[&amp;.active]:text-zinc-400">
                            Login
                        </a>

                        <a href="{{route('register')}}" class="hidden py-2 text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 sm:block sm:px-2 [&amp;.active]:text-black/90 dark:[&amp;.active]:text-zinc-400">Register</a>
                        @endguest
                    </div>
                </div>
            </div>

            <div class="absolute inset-y-0 right-0 flex items-center pr-0 sm:static sm:inset-auto sm:ml-4">

                <div id="theme-switcher">
                    <button class="sun rounded-2 flex items-center justify-center whitespace-nowrap px-1.5 py-2 uppercase text-neutral-500 transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 sm:p-2" type="button" id="themeSwitcher" data-te-dropdown-toggle-ref="" data-te-dropdown-position="dropend" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block h-5 w-5">
                            <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z"></path>
                        </svg>
                    </button>
                </div>

                <div id="theme-switcher">
                    <button class="moons rounded-2 flex items-center justify-center whitespace-nowrap px-1.5 py-2 uppercase text-neutral-500 transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 sm:p-2" type="button" id="themeSwitcher" data-te-dropdown-toggle-ref="" data-te-dropdown-position="dropend" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 transform -rotate-90">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                    </button>
                </div>

                <a href="#" class="rounded-md px-1.5 py-2 text-sm font-medium text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 sm:p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg>
                </a>


                <a href="#" class="moons rounded-md px-1.5 py-2 text-sm font-medium text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 sm:p-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path>
                    </svg>
                </a>
                 @auth
                <a href="{{route('logout')}}" class="rounded-md px-1.5 py-2 text-sm font-medium text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 sm:p-2">
                    <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3"/>
                    </svg>
                </a>
                    <a href="{{route('profile')}}">
                        <div class="flex space-x-2">
                            <div class="relative w-8 h-8">
                                <img class="rounded-full border border-gray-100 shadow-sm" src="/storage/profile/{{auth()->user()->image}}" alt="user image" />
                                <div class="absolute top-0 right-0 h-3 w-3 my-1 border-2 border-white rounded-full bg-green-400 z-2"></div>
                            </div>
                        </div>
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>
