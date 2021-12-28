@extends('layouts.layout')

    @section('content')

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="fixed top-0 right-0 px-6 py-4">
                    @auth
                        <a href="{{ url('/home') }}" class="btn text-primary border-primary md:border-2 hover:bg-primary hover:text-white transition ease-out duration-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn text-primary border-primary md:border-2 hover:bg-primary hover:text-white transition ease-out duration-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn text-primary border-primary md:border-2 hover:bg-primary hover:text-white transition ease-out duration-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="">
                    <p>{{ session('msg') }}</p>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="p-6">
                        <div class="ml-10 ">
                            <div class="title text-gray-600 dark:text-gray-400 text-lg w-100">
                                <div class="content">
                                    <img src="/img/cake.jpg" alt="Cake House">
                                </div>
                                <p class="font-bold text-4xl text-red-500 py-10 text-center">Lagos's Best Cake</p>
                            </div>
                        </div>
                        <p class="text-center"><a href="{{ route('cakes.create') }}" class="text-red-800 "><- Order a Cake</a></p>
                    </div>
                </div>
            </div>
        </div>
        
@endsection