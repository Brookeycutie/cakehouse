@extends('layouts.app')

@section('content')
<div class="pt-5 p-4 max-w-xxl rounded overflow-hidden shadow-lg">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ __('Dashboard') }}</div>
            <div class="text-gray-700 text-base">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <p class="text-red-500 px-6 pt-4 pb-2">{{ __('You are logged in!') }}</p>
            <div class="flex justify-center pt-8">
                <p class="btn bg-yellow-500 text-white hover:shadow-inner transform hover:scale-125 hover:bg-opacity-50 transition ease-out duration-300"><a href="/cakes">View all cake orders</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
