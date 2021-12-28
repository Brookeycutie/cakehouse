<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cake;

class CakeController extends Controller
{
    public function index(){
    //  $cakes = Cake::all();
     // $cakes = Cake::orderBy('name')->get();
     // $cakes = Cake::where('type','nigerian')->get();
        $cakes = Cake::latest()->get();
        return view('cakes.index', ['cakes'=>$cakes]);
    }

    public function show($id){

        $cake = Cake::findorFail($id);
        return view('cakes.show', ['cake'=>$cake]);
    }

    public function create(){
        return view('cakes.create');
    }

    public function store(){
        
        $cake = new Cake();
        $cake->name = request('name');
        $cake->type = request('type');
        $cake->base = request('base');
        $cake->toppings = request('toppings');
        $cake->save();
        return redirect('/')->with('msg','Thanks for your order');
    }

    public function destroy($id){
        $cake = Cake::findorFail($id);
        $cake->delete();
        return redirect('/cakes');
    }
}
