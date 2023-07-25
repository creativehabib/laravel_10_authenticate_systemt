@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <section class="flex-1 xl:mt-20">
        <div class="flex max-w-screen-lg mx-auto my-16 overflow-hidden bg-white rounded-lg lg:space-x-8 dark:bg-gray-900 lg:w-xl">

            <h1 class="dark:text-white">This is Dashboard page {{auth()->user()->name}}</h1>
        </div>
    </section>
@endsection






