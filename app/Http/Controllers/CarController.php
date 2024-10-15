<?php

namespace App\Http\Controllers;

use App\Models\Car;
use DateTime;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return response()->json($cars);
    }

    public function store(Request $request)
    {
       $car = new Car();
       $car->brand = $request->brand;
       $car->model = $request->model;
       $car->year = $request->year;
       $car->created_at = new DateTime();
       $car->save();
       return response()->json([
           "message" => "car added",
           "actual_car" => $car
       ],201);
    }
}
