<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Races;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    public function seasonDrivers(string $season)
    {
        $r = seasonRaces($season)['race_results'];
        ddd($r);
    }

    public function seasonRaces(string $season)
    {
        return Races::where('season', $season);
    }
}
