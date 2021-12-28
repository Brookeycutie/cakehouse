
@extends('layouts.app')
    @section('content')

    <div class="max-w-xxl w-full">
        <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
          <div class="mb-8">
            <p class="text-md font-bold mb-4 text-gray-600 flex items-center">
              Cake Orders
            </p>

            @foreach ($cakes as $cake)
          <div class="flex items-center">
            <a href="/cakes/{{ $cake->id }}">
            <img class="w-10 h-10 rounded-full mr-4" src="/img/cake-icon.jpg" alt="CakeHouse Icon">
            <div class="text-md">
              <p class="text-gray-900">{{ $cake->name }}</p>
              <p class="text-gray-600 mb-3">{{ $cake->created_at }}</p></a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      

        <div class="p-6">
            <div class="ml-12">
                <div class="text-gray-600 dark:text-gray-400 text-lg w-100">
                     <br>
                </div>               

                
                    <div>
                        
                    </div>
                
            </div>
        </div>
@endsection