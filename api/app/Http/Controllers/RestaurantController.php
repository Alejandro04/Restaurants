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

        $data = json_decode($request->json, true);
        $item = Restaurant::create([
            'name' => $data['nombre'],
            'description' => $data['apellido'],
        ]);    

        return response()->json(['mensaje' => 'Restaurant registrado exitosamente', 'object' => $item], 200);
    }
}


