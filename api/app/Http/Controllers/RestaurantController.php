<?php

namespace App\Http\Controllers;
use App\Restaurant;

class RestaurantController extends Controller
{
    public function index(){
     //   return "ok";
        $item = Restaurant::all();
        return response()->json(['restaurants' => $item], 200);
    }
}
