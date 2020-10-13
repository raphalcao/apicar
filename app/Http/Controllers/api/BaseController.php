<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;

abstract class BaseController 
{

    protected $class;
    public function index()
    {
        return $this->class::all();
    }

    
    public function store(Request $request)
    {
        $car =  $this->class::create($request->all());
        return response()->json($car);
    }

    
    public function show($id)
    {
        $car = $this->class::find($id);

        if(is_null($car)) {
            return response()->json('Nonexistent car', 404);
        }

        return response()->json($car);
        
        
    }

    public function update(Request $request, $id)
    {
        $car = $this->class::find($id);
        
        if(is_null($car)) {
            return response()->json('Nonexistent car', 404);
        }
        
        $car->update($request->all());

        return response()->json($car);
    }

    public function destroy($id)
    {
        $car = $this->class::find($id);
        
        if(is_null($car)) {
            return response()->json('Nonexistent car', 404);
        }

        $car->delete();

        return response()->json($car);
    }
}
