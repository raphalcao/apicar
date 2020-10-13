<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
   
    public function index()
    {
        return Car::all();
    }

    
    public function store(Request $request)
    {
        Car::create($request->all());
    }

    
    public function show($id)
    {
        $car = Car::find($id);

        if(is_null($car)) {
            return response()->json('Nonexistent car', 404);
        }

        return response()->json($car);
        
        
    }

    public function update(Request $request, $id)
    {
        $car = Car::find($id);
        
        if(is_null($car)) {
            return response()->json('Nonexistent car', 404);
        }
        
        $car->update($request->all());

        return response()->json($car);
    }

    public function destroy($id)
    {
        $car = Car::find($id);
        
        if(is_null($car)) {
            return response()->json('Nonexistent car', 404);
        }

        $car->delete();

        return response()->json($car);
    }
}
