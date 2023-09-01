@extends('layouts.app')
@section('title','Edit Profile')
@section('content')
    <section class="flex-1 xl:mt-10">
        <div class=" max-w-screen-lg mx-auto overflow-hidden rounded bg-white dark:bg-gray-900 lg:w-xl py-2 px-4">
            <form action="{{route('profile.update', auth()->id())}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mt-4">
                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200" for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{auth()->user()->name}}" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-200 rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-300 dark:focus:border-gray-200 focus:outline-none focus:ring focus:ring-slate-400 dark:placeholder-gray-400 focus:ring-opacity-20" placeholder="Enter name">
                </div>
                <div class="mt-4">
                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200" for="email">Email Address</label>
                    <input type="text" name="email" id="email" value="{{auth()->user()->email}}" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-200 rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-300 dark:focus:border-gray-200 focus:outline-none focus:ring focus:ring-slate-400 dark:placeholder-gray-400 focus:ring-opacity-20" placeholder="Enter name">
                </div>
                <div class="mt-4">
                    <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200" for="about">About</label>
                    <textarea name="about" id="about" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-200 rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-300 dark:focus:border-gray-200 focus:outline-none focus:ring focus:ring-slate-400 dark:placeholder-gray-400 focus:ring-opacity-20" placeholder="Enter about">{{auth()->user()->about}}</textarea>
                </div>
                <div class="mt-4">
                    <input type="file" name="image">
                </div>
                <div class="mt-8">
                    <button type="submit" class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-300 transform rounded-md bg-sky-400 hover:bg-sky-600 focus:outline-none focus:bg-sky-600">Update</button>
                </div>
            </form>
        </div>
    </section>
@endsection
