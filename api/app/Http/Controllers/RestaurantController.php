<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Restaurant;

class RestaurantController extends Controller
{
    public function index(){
        $item = Restaurant::all();
        return response()->json(['restaurants' => $item], 200);
    }

    public function show($id){
        $item = Restaurant::find($id);
        return response()->json(['restaurante' => $item], 200);
    }

    public function store(Request $request){     

        $item = Restaurant::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);     
        return response()->json(['mensaje' => 'Restaurant registrado exitosamente', 'object' => $item], 200);
    }
}


