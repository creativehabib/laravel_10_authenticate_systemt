@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <section class="flex xl:mt-10 justify-center">
        <div class="w-1/2">
            @auth
            <form action="{{route('post')}}" method="post" class="mb-4">
                @csrf
                <div>
                    <textarea name="content" class="w-full bg-gray-100 dark:bg-gray-900 border rounded h-20 dark:text-gray-200 px-4 py-2"></textarea>
                </div>
                <button type="submit" class="bg-sky-500 px-4 py-1.5 text-white rounded mt-2">Post</button>
            </form>
            @endauth
            @foreach($posts as $post)
            <div class="dark:text-gray-200 bg-white dark:bg-gray-900 mb-4">
                <div>
                    <img src="https://ebdresults.com/wp-content/uploads/2022/03/BEPZA-Job-Circular-2022-390x220.jpg.webp" class="object-cover w-screen">
                    <div class="p-4 dark:border">
                        <span class="font-semibold">{{$post->user->name}}</span>
                        <span class="text-sm text-gray-500 font-normal">{{$post->created_at->diffForHumans()}}</span>
                        <p class="mt-1">{{$post->content}}</p>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </section>
@endsection






