<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CakeHouse') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div class="lg:flex lg:items-center lg:w-auto w-full" id="app">
        <nav class="flex justify-between items-center">
            <div class="">
                <ul class="flex items-center justify-between text-base text-gray-900 pt-4 lg:pt-0">
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-yellow-600" href="{{ url('/') }}">CakeHouse</a></li>
                  </ul>
            </div>

            <div>
                <ul class="flex">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="">
                                <a class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="">
                                <a class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="dropdown inline-block relative">
                            <a id="navbarDropdown" class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <span class="mr-1">{{ Auth::user()->name }}</span>
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                            </a>

                            <div class="dropdown-menu absolute hidden text-gray-700 pt-1">
                                <a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>


          </nav>
    </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
