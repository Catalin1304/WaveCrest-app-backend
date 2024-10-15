<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\FuelLog;
use Illuminate\Http\Request;

class FuelLogController extends Controller
{
    public function store(Request $request, Car $car)
    {
        $fuelLog = new FuelLog();
        $fuelLog->fill_up_date = $request->fill_up_date;
        $fuelLog->liters = $request->liters;
        $fuelLog->distance = $request->distance;
        $fuelLog->car_id = $car->id;
        $fuelLog->save();

        return response()->json($fuelLog, 201);
    }

    public function index(Car $car)
    {
        return $car->fuelLogs;
    }

    public function showFuelLogs(Car $car)
    {
        $fuelLogs = $car->fuelLogs()->get();

        return response()->json($fuelLogs, 200);
    }
}


