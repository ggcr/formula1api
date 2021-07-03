<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Races;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function calculatePointsForAllDrivers()
    {
        $races = Races::all('race_results')->toArray();
        $drivers = Driver::all();
        $i = 0;
        foreach ($races as $race) {
            foreach ($race['race_results'] as $key => $value) {
                $request = Request::create(parse_url($value['driver'])['path'], 'GET');
                $response = json_decode(app()->handle($request)->getContent());
                $driver = $drivers->where('id', reset($response)->id);
                switch ($key) {
                    case 1:
                        $points = 25;
                        break;
                    case 2:
                        $points = 18;
                        break;
                    case 3:
                        $points = 15;
                        break;
                    case 4:
                        $points = 12;
                        break;
                    case 5:
                        $points = 10;
                        break;
                    case 6:
                        $points = 8;
                        break;
                    case 7:
                        $points = 6;
                        break;
                    case 8:
                        $points = 4;
                        break;
                    case 9:
                        $points = 2;
                        break;
                    case 10:
                        $points = 1;
                        break;
                    default:
                        $points = 0;
                        break;
                }

                if(!isset($driver->first()['points'])) {
                    $driver->first()['points'] = $points;
                } else {
                    $driver->first()['points'] += $points;
                }



                if (!isset($driver->first()['team_name'])) {
                    $driver->first()['team_name'] = $value['team'];
                }


            }
            $i += 1;
        }
        return $drivers;
    }
}
