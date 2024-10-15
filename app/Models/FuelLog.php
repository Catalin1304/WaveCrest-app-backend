<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelLog extends Model
{
    use HasFactory;

    protected $fillable = ['car_id', 'fill_up_date', 'liters', 'distance'];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
