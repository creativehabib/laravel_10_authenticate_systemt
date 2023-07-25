<div class="flex justify-between min-h-screen font-sans">
    <div>
        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/authentication/illustration.svg" alt="">
    </div>
    <div class="w-1/2 pr-10">
        <div class="flex flex-col px-24 pt-10">
            <p class="self-end">Logo</p>
        </div>
        <div class="pt-20 pb-6">
            <h1 class="text-3xl font-bold tracking-wide leading-loose">
                Hi, Welcome back!
            </h1>
            <span class="font-light text-gray-500">
                Login now to manage your job made easy.
            </span>
            <div class="flex justify-between items-center pt-10 space-x-6">
                <button class="flex items-center justify-center w-1/2 py-4.5 rounded-lg bg-white border border-gray-400 whitespace-nowrap">
                    <span>Sign in with Google</span>
                </button>
                <button class="flex items-center justify-center w-1/2 py-4.5 rounded-lg bg-blue-500 whitespace-nowrap text-white">
                    <span>Sign in with Facebook</span>
                </button>
            </div>
            <div class="flex justify-between items-center pt-6">
                <hr class="w-full border-gray-400"/>
                <span class="px-4 font-light tracking-wider text-gray-500">or</span>
                <hr class="w-full border-gray-400"/>
            </div>
            <form>
                <div class="pt-6">
                    <label for="email" class="font-light">Email address</label>
                    <div class="flex items-center mt-2 w-full rounded-lg border border-gray-400">
                        <div class="flex justify-center items-center pl-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <input 
                        type="text"
                        name="email" 
                        id="email" 
                        placeholder="example@demo.com"
                        class="px-4 py-4.5 w-full focus:outline-none font-light border-0 focus:ring-0"
                        >
                    </div>
                </div>
                <div class="pt-6">
                    <label for="password" class="font-light">Password</label>
                    <div class="flex items-center mt-2 w-full rounded-lg border border-gray-400">
                        <div class="flex justify-center items-center pl-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>                              
                        </div>
                        <input 
                        type="password"
                        name="password" 
                        id="password" 
                        placeholder="******"
                        class="px-4 py-4.5 w-full focus:outline-none font-light border-0 focus:ring-0"
                        >
                    </div>
                </div>
                <div class="flex justify-between items-center pt-4">
                    <div class="flex items-center">
                        <input 
                        type="checkbox" 
                        name="remember" 
                        id="remember"
                        class="w-5 h-5 text-orange-500 bg-white rounded border border-gray-400 focus:outline-none focus:ring-orange-500"
                        >
                        <label for="remember" class="pl-4 font-light text-gray-900">Remember me</label>
                    </div>
                    <a href="#" class=" text-teal-500 hover:text-teal-600">Forgot password</a>
                </div>
            </form>
        </div>
    </div>
</div>
