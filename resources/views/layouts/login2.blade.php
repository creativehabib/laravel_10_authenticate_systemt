<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section class='flex flex-col md:flex-row h-screen items-center'>
        <!-- login left Banner -->
        <div class='bg-blue-600 hidden lg:block md:w-1/2 xl:w-2/3 h-screen'>
            <!--<img class='w-full h-full object-cover' src='https://t3.ftcdn.net/jpg/02/92/90/56/360_F_292905667_yFUJNJPngYeRNlrRL4hApHWxuYyRY4kN.jpg'>-->
            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/authentication/illustration.svg" alt="">
        </div>
        <!-- login Right Content Section -->
        <div class='bg-white md:mx-auto items-center justify-center w-full flex md:max-w-md lg:max-w-full md:w-1/2 xl:w-1/3 px-6 lg:px-16 xl:px-12'>
            <div class='w-full h-100'>
                <div class="text-xl font-bold text-center">
                    <a href="">Logo</a>
                </div>
                <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Log in to your account</h1>
                
                <form class="mt-6">
                    <div>
                        <label for='email' class="block text-gray-700">Email Address</label>
                        <input 
                        type='email' 
                        placeholder='Enter Email Address'
                        class="w-full bg-gray-200 focus:border-blue-500 focus:bg-white focus:outline-none rounded-lg mt-2 border px-4 py-2"
                        autocomplete autofocus required>
                    </div>
                    <div class='mt-4'>
                        <label for='password' class="block text-gray-700">Password</label>
                        <input 
                        type='password' 
                        minlength="6"
                        placeholder='Enter Password'
                        class="w-full bg-gray-200 focus:border-blue-500 focus:bg-white focus:outline-none rounded-lg mt-2 border px-4 py-2"
                        required>
                    </div>
                    <div class="text-right mt-2">
                        <a href='' class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700 focus:outline-none">
                            Forgot Password
                        </a>
                    </div>
                    
                    <button 
                        type="submit" 
                        class="w-full block bg-blue-500 hover:bg-blue-400 px-4 py-2 mt-6 rounded-lg font-semibold text-white focus:bg-blue-400 focus:outline-none">
                        Log In
                    </button>
                    
                    <hr class="my-6 border-gray-400 w-full">
                    
                    <button 
                        type="button" 
                        class="w-full block bg-white border-gray-300 hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-3 border">
                        <div class="flex items-center justify-center">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 16.318A4.486 4.486 0 0012.016 15a4.486 4.486 0 00-3.198 1.318M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                            </svg> --}}
                            <img src="https://tailwindflex.com/public/images/icons/google.svg" class="h-6 w-6" alt="">
                            <span class="ml-4">Log In with Google</span>
                        </div>
                    </button>
                    
                    <p class="text-center mt-2">
                        Need an account?
                        <a href="" class="text-blue-500 hover:text-blue-700 font-semibold">
                            Create an account
                        </a>
                    </p>
                    
                    <p class="text-sm text-gray-500 mt-6 text-center">
                        &copy; 2023 Tailwind Login Landing Page
                    </p>
                </form>
            </div>
        </div>
    </section>
</body>
</html>