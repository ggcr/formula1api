<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'apodo',
        'nationality',
        'number',
        'number_url',
        'image_url'
    ];
}
