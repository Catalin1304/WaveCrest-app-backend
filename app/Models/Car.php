<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['brand', 'model', 'year'];

    public function fuelLogs()
    {
        return $this->hasMany(FuelLog::class);
    }
}
