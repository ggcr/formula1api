<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Races extends Model
{
    use HasFactory;

    protected $casts = [
        'race_results' => 'array',
        'qualy_results' => 'array'
    ];

    protected $fillable = [
        'race_name',
        'circuit_name',
        'season',
        'date',
        'race_results',
        'qualy_results'
    ];
}
