@extends('layouts.app')

@section('title', 'Login')
@section('content')
    {{-- login form design --}}
    <section class="flex-1 xl:mt-20">
        <div class="flex max-w-screen-lg mx-auto my-16 overflow-hidden bg-white rounded-lg lg:space-x-8 dark:bg-gray-900 lg:w-xl">
            <div class="items-center hidden lg:flex lg:w-1/2">
                {{-- <img src="https://tailwindcomponents.com/svg/queue-animate.svg" alt=""> --}}
                <img src="https://tailwindcomponents.com/svg/secure-login-animate.svg" alt="">
            </div>
            <div class="w-full px-6 py-8 md:px-8 lg:w-1/2">
                <h2 class="text-2xl font-semibold text-center text-gray-700 dark:text-white">Welcome</h2>
                <p class="mt-2 text-xl text-center text-gray-600 dark:text-gray-200">We are Happy to see you back</p>
                <div class="mt-4 space-y-3 sm:flex sm:items-center sm:space-x-4 sm:space-y-0">
                    <a href="" class="flex items-center justify-center w-full px-4 py-2 space-x-3 text-sm text-center text-gray-600 transition-colors duration-300 transform border rounded-lg dark:text-gray-300 dark:border-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="438.549px" height="438.549px" viewBox="0 0 438.549 438.549" xml:space="preserve" class="w-5 h-5 fill-current"><g><path d="M409.132,114.573c-19.608-33.596-46.205-60.194-79.798-79.8C295.736,15.166,259.057,5.365,219.271,5.365 c-39.781,0-76.472,9.804-110.063,29.408c-33.596,19.605-60.192,46.204-79.8,79.8C9.803,148.168,0,184.854,0,224.63 c0,47.78,13.94,90.745,41.827,128.906c27.884,38.164,63.906,64.572,108.063,79.227c5.14,0.954,8.945,0.283,11.419-1.996 c2.475-2.282,3.711-5.14,3.711-8.562c0-0.571-0.049-5.708-0.144-15.417c-0.098-9.709-0.144-18.179-0.144-25.406l-6.567,1.136 c-4.187,0.767-9.469,1.092-15.846,1c-6.374-0.089-12.991-0.757-19.842-1.999c-6.854-1.231-13.229-4.086-19.13-8.559 c-5.898-4.473-10.085-10.328-12.56-17.556l-2.855-6.57c-1.903-4.374-4.899-9.233-8.992-14.559 c-4.093-5.331-8.232-8.945-12.419-10.848l-1.999-1.431c-1.332-0.951-2.568-2.098-3.711-3.429c-1.142-1.331-1.997-2.663-2.568-3.997 c-0.572-1.335-0.098-2.43,1.427-3.289c1.525-0.859,4.281-1.276,8.28-1.276l5.708,0.853c3.807,0.763,8.516,3.042,14.133,6.851 c5.614,3.806,10.229,8.754,13.846,14.842c4.38,7.806,9.657,13.754,15.846,17.847c6.184,4.093,12.419,6.136,18.699,6.136 c6.28,0,11.704-0.476,16.274-1.423c4.565-0.952,8.848-2.383,12.847-4.285c1.713-12.758,6.377-22.559,13.988-29.41 c-10.848-1.14-20.601-2.857-29.264-5.14c-8.658-2.286-17.605-5.996-26.835-11.14c-9.235-5.137-16.896-11.516-22.985-19.126 c-6.09-7.614-11.088-17.61-14.987-29.979c-3.901-12.374-5.852-26.648-5.852-42.826c0-23.035,7.52-42.637,22.557-58.817 c-7.044-17.318-6.379-36.732,1.997-58.24c5.52-1.715,13.706-0.428,24.554,3.853c10.85,4.283,18.794,7.952,23.84,10.994 c5.046,3.041,9.089,5.618,12.135,7.708c17.705-4.947,35.976-7.421,54.818-7.421s37.117,2.474,54.823,7.421l10.849-6.849 c7.419-4.57,16.18-8.758,26.262-12.565c10.088-3.805,17.802-4.853,23.134-3.138c8.562,21.509,9.325,40.922,2.279,58.24 c15.036,16.18,22.559,35.787,22.559,58.817c0,16.178-1.958,30.497-5.853,42.966c-3.9,12.471-8.941,22.457-15.125,29.979 c-6.191,7.521-13.901,13.85-23.131,18.986c-9.232,5.14-18.182,8.85-26.84,11.136c-8.662,2.286-18.415,4.004-29.263,5.146 c9.894,8.562,14.842,22.077,14.842,40.539v60.237c0,3.422,1.19,6.279,3.572,8.562c2.379,2.279,6.136,2.95,11.276,1.995 c44.163-14.653,80.185-41.062,108.068-79.226c27.88-38.161,41.825-81.126,41.825-128.906 C438.536,184.851,428.728,148.168,409.132,114.573z"></path></g></svg>
                        <span class="text-sm text-gray-800 dark:text-gray-200">Login with Github</span>
                    </a>

                    <a href="" class="flex items-center justify-center w-full px-4 py-2 space-x-3 text-sm text-center text-gray-600 transition-colors duration-300 transform border rounded-lg dark:text-gray-300 dark:border-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 612" xml:space="preserve" class="w-5 h-5 text-blue-500 fill-current"><g><path d="M612,116.258c-22.525,9.981-46.694,16.75-72.088,19.772c25.929-15.527,45.777-40.155,55.184-69.411 c-24.322,14.379-51.169,24.82-79.775,30.48c-22.907-24.437-55.49-39.658-91.63-39.658c-69.334,0-125.551,56.217-125.551,125.513 c0,9.828,1.109,19.427,3.251,28.606C197.065,206.32,104.556,156.337,42.641,80.386c-10.823,18.51-16.98,40.078-16.98,63.101 c0,43.559,22.181,81.993,55.835,104.479c-20.575-0.688-39.926-6.348-56.867-15.756v1.568c0,60.806,43.291,111.554,100.693,123.104 c-10.517,2.83-21.607,4.398-33.08,4.398c-8.107,0-15.947-0.803-23.634-2.333c15.985,49.907,62.336,86.199,117.253,87.194 c-42.947,33.654-97.099,53.655-155.916,53.655c-10.134,0-20.116-0.612-29.944-1.721c55.567,35.681,121.536,56.485,192.438,56.485 c230.948,0,357.188-191.291,357.188-357.188l-0.421-16.253C573.872,163.526,595.211,141.422,612,116.258z"></path></g></svg>
                        <span class="text-sm text-gray-800 dark:text-gray-200">Login with Twitter</span>
                    </a>
                </div>
                <div class="flex items-center justify-between mt-4">
                    <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/4"></span>
                    <a href="" class="text-xs text-center text-gray-500 uppercase dark:text-gray-400 hover:underline">or use your email</a>
                    <span class="w-1/5 border-b dark:border-gray-400 lg:w-1/4"></span>
                </div>
                @if(session('status')) {{session('status')}} @endif
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="mt-4">
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email Address</label>
                        <input type="email" name="email" value="{{old('email')}}" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-200 rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-300 dark:focus:border-gray-200 focus:outline-none focus:ring focus:ring-slate-400 dark:placeholder-gray-400 focus:ring-opacity-20" placeholder="Enter email address">
                        @error('email')
                        <span class="text-sm text-red-600">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Password</label>
                        <input type="password" name="password" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-200 rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-300 dark:focus:border-gray-200 focus:outline-none focus:ring focus:ring-slate-400 dark:placeholder-gray-400 focus:ring-opacity-20" placeholder="Enter password">
                        @error('password')
                        <span class="text-sm text-red-600">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="flex justify-between mt-4">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember" name="remember" class="border-gray-200 rounded shadow-sm dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-sky-500 focus:outline-none focus:ring-sky-600 dark:placeholder-gray-400 focus:ring-opacity-20">
                            <label for="remember" class="ml-2 text-gray-700 dark:text-gray-300">Remember Me</label>
                        </div>
                        <a href="" class="text-sm text-gray-600 dark:text-gray-400 hover:underline">Forgot Your Password</a>
                    </div>

                    <div class="mt-8">
                        <button type="submit" class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-300 transform rounded-md bg-sky-400 hover:bg-sky-600 focus:outline-none focus:bg-sky-600">Sign in</button>
                    </div>
                </form>

                <div class="flex items-center justify-between mt-4">
                    <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>
                    <a href="/register" class="text-sm text-gray-500 uppercase dark:text-gray-400 hover:underline">create an account</a>
                    <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>
                </div>
            </div>
        </div>
    </section>
@endsection
