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
          
        return $request->all();  
        $item = Restaurant::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
        ]);     
        return response()->json(['mensaje' => 'Restaurant registrado exitosamente', 'object' => $item], 200);
    }
}


