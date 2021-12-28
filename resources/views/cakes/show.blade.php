
@extends('layouts.app')
@section('content')



<div class="max-w-xl m-12 rounded shadow-lg">
    <h1 class="text-center font-bold text-xl mb-2 text-yellow-900">Order for {{ $cake->name }}</h1>
    <div class="px-6 py-4">
      <div class="text-md mb-2"><i class="text-red-500 mr-2">Type:</i>{{ $cake->type }}</div>
      <p class="text-gray-700 mb-3">
        <i class="text-red-500 mr-2">Base:</i>{{ $cake->base }}
      </p>
      
      <div class="mb-3">
        <p class="block text-red-500 text-md font-bold mb-2">Extra Toppings:</p>
        <ul>
            @foreach ($cake->toppings as $topping)
                <li class="ml-12 mb-2">{{ $topping }}</li>
            @endforeach
        </ul>
      </div>

      <p class="text-gray-700 mb-3">
        <i class="text-red-500 mr-2">Time Ordered:</i>{{ $cake->created_at }}
      </p>

        <form action="{{ route('cakes.destroy', $cake->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="bg-yellow-600 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Complete Order</button>
            </form>
    </div>
    <div class="flex justify-end">
        <a href="{{ route('cakes.index') }}" class="btn bg-secondary-100 text-secondary-200 hover:shadow-inner transform hover:scale-125 hover:bg-opacity-50 transition ease-out duration-300""><- Back to all cakes</a>
    </div>
</div>
    
    @endsection