<?php

namespace App\Http\Controllers\api;


use App\Models\Car;

class CarController extends BaseController
{
    public function __construct()
    {
        $this->class = Car::class;
    }
}
