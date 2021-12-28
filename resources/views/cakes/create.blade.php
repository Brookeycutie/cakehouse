@extends('layouts.app')
    @section('content')
        <div class="w-full max-w-xl m-12">
            <h1 class="text-xl text-yellow-700 text-center">Order a New Cake</h1>
            <form action="{{ route('cakes.index') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST">
                @csrf
               <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label> 
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name">
               </div>

               <div class="mb-4">
                <label for="type" class="block text-gray-700 text-sm font-bold mb-2">Choose cake type:</label>
                <select name="type" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="type">
                    <option value="nigerian">Nigerian</option>
                    <option value="chinese">Chinese</option>
                    <option value="indian">Indian</option>
                </select>
               </div>
               
               <div class="mb-4">
                <label for="base" class="block text-gray-700 text-sm font-bold mb-2">Choose cake base:</label>
                <select name="base" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="base">
                    <option value="vanilla cheese">Vanilla Cheese</option>
                    <option value="garlic crust">Garlic Crust</option>
                    <option value="chocolatey">Chocolatey</option>
                </select>
               </div>

               <div class="mb-4">
                <fieldset class="">
                    <label for="toppings" class="block text-gray-700 text-sm font-bold mb-2">Extra Toppings</label>
                    <input type="checkbox" class="mb-2 m-2" name="toppings[]" value="chocolate">Chocolate<br>
                    <input type="checkbox" class="mb-2 m-2" name="toppings[]" value="fruits">Fruits<br>
                    <input type="checkbox" class="mb-2 m-2" name="toppings[]" value="butter icing">Butter Icing<br>
                    <input type="checkbox" class="mb-2 m-2" name="toppings[]" value="fondant">Fondant<br>
                   </fieldset>
               </div>
                <div class="text-center">
                    <input type="submit" class="bg-yellow-600 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" name="submit" value="Order Cake">
                </div>
            </form>
            <div class="flex justify-end">
                <div class="btn bg-secondary-100 text-secondary-200 hover:shadow-inner transform hover:scale-125 hover:bg-opacity-50 transition ease-out duration-300"><a href="{{ route('cakes.index') }}"><- Back to all cakes</a></div>
            </div>
        </div>
            
@endsection