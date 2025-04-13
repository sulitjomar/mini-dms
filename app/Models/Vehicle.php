<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'vin', 'make', 'model', 'year', 'color', 'mileage', 'price', 'status',
    ];

    protected $casts = [
        'year' => 'integer',
        'mileage' => 'integer',
        'price' => 'decimal:2',
    ];
}
