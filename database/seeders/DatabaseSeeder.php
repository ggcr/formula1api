<?php

namespace Database\Seeders;

use App\Models\Driver;
use App\Models\Races;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\URL;
use Illuminate\Database\Seeder;
use peterkahl\flagMaster\flagMaster;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Max', 'lastname' => 'Verstappen', 'apodo' => '', 'nationality' => 'NL', 'number' => '33', 'image_url' => 'http://127.0.0.1:8000/img/verstappen.png'],
            ['name' => 'Lewis', 'lastname' => 'Hamilton', 'apodo' => '', 'nationality' => 'GB', 'number' => '44', 'image_url' => 'http://127.0.0.1:8000/img/hamilto.png'],
            ['name' => 'Sergio', 'lastname' => 'Pérez', 'apodo' => 'Checo', 'nationality' => 'MX', 'number' => '11', 'image_url' => 'http://127.0.0.1:8000/img/perez.png'],
            ['name' => 'Lando', 'lastname' => 'Norris', 'apodo' => '', 'nationality' => 'GB', 'number' => '4', 'image_url' => 'http://127.0.0.1:8000/img/norris.png'],
            ['name' => 'Valtteri', 'lastname' => 'Bottas', 'apodo' => '', 'nationality' => 'FI', 'number' => '77', 'image_url' => 'http://127.0.0.1:8000/img/bottas.png']
        ];

        Driver::insert($data);

        $data = [
            [
                'race_name' => 'Grand Prix De Monaco 2021',
                'circuit_name' => 'Circuit de Monaco',
                'country' => 'MC',
                'season' => '2021',
                'date' => '2021/06/04',
                'race_results' => '{ "1": { "driver": "http://127.0.0.1:8000/api/driver/verstappen","team": "Red Bull"}, "2": { "driver": "http://127.0.0.1:8000/api/driver/verstappen","team": "Red Bull"} }',
                'qualy_results' => '{ "1": { "driver": "http://127.0.0.1:8000/api/driver/verstappen","team": "Red Bull"}, "2": { "driver": "http://127.0.0.1:8000/api/driver/verstappen","team": "Red Bull"} }',
            ],
            [
                'race_name' => 'Gran Premio De España 2021',
                'circuit_name' => 'Circuit de Barcelona-Catalunya',
                'country' => 'ES',
                'season' => '2021',
                'date' => '2021/05/09',
                'race_results' => '{ "1": { "driver": "http://127.0.0.1:8000/api/driver/hamilton","team": "Red Bull"}, "2": { "driver": "http://127.0.0.1:8000/api/driver/verstappen","team": "Red Bull"} }',
                'qualy_results' => '{ "1": { "driver": "http://127.0.0.1:8000/api/driver/verstappen","team": "Red Bull"}, "2": { "driver": "http://127.0.0.1:8000/api/driver/verstappen","team": "Red Bull"} }',
            ],
        ];

        Races::insert($data);
    }
}
