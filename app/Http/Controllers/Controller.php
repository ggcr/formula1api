<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Races;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function calculatePointsForAllDrivers($season)
    {
        $season_races = (new RacesController)->GetSeasonRaces($season);
        $season_drivers = Driver::all();
        $driver['points'] = 9999999;
        $points = 0;
        foreach ($races as $index => $race) {
            dd($race['driver']);
            switch ($index) {
                case 1:
                    $points += 25;
                    break;
                case 2:
                    $points += 18;
                    break;
                case 3:
                    $points += 15;
                    break;
                case 4:
                    $points += 12;
                    break;
                case 5:
                    $points += 10;
                    break;
                case 6:
                    $points += 8;
                    break;
                case 7:
                    $points += 6;
                    break;
                case 8:
                    $points += 4;
                    break;
                case 9:
                    $points += 2;
                    break;
                case 10:
                    $points += 1;
                    break;
                default:
                    $points += 0;
                    break;
            }
        }
    }
}
