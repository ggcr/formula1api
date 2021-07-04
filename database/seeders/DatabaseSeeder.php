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
            ['name' => 'Max', 'lastname' => 'Verstappen', 'apodo' => '', 'nationality' => 'NL', 'number' => '33', 'image_url' => URL::current() . '/img/verstappen.png'],
            ['name' => 'Lewis', 'lastname' => 'Hamilton', 'apodo' => '', 'nationality' => 'GB', 'number' => '44', 'image_url' => URL::current() . '/img/hamilto.png'],
            ['name' => 'Sergio', 'lastname' => 'Pérez', 'apodo' => 'Checo', 'nationality' => 'MX', 'number' => '11', 'image_url' => URL::current() . '/img/perez.png'],
            ['name' => 'Lando', 'lastname' => 'Norris', 'apodo' => '', 'nationality' => 'GB', 'number' => '4', 'image_url' => URL::current() . '/img/norris.png'],
            ['name' => 'Valtteri', 'lastname' => 'Bottas', 'apodo' => '', 'nationality' => 'FI', 'number' => '77', 'image_url' => URL::current() . '/img/bottas.png'],
            ['name' => 'Charles', 'lastname' => 'Leclerc', 'apodo' => '', 'nationality' => 'MC', 'number' => '16', 'image_url' => URL::current() . '/img/leclerc.png'],
            ['name' => 'Carlos', 'lastname' => 'Sainz', 'apodo' => '', 'nationality' => 'ES', 'number' => '55', 'image_url' => URL::current() . '/img/sainz.png'],
            ['name' => 'Pierre', 'lastname' => 'Gasly', 'apodo' => '', 'nationality' => 'FR', 'number' => '10', 'image_url' => URL::current() . '/img/gasly.png'],
            ['name' => 'Daniel', 'lastname' => 'Ricciardo', 'apodo' => '', 'nationality' => 'AU', 'number' => '3', 'image_url' => URL::current() . '/img/ric.png'],
            ['name' => 'Sebastian', 'lastname' => 'Vettel', 'apodo' => '', 'nationality' => 'DE', 'number' => '5', 'image_url' => URL::current() . '/img/vet.png'],
            ['name' => 'Fernando', 'lastname' => 'Alonso', 'apodo' => '', 'nationality' => 'ES', 'number' => '14', 'image_url' => URL::current() . '/img/alo.png'],
            ['name' => 'Lance', 'lastname' => 'Stroll', 'apodo' => '', 'nationality' => 'CA', 'number' => '18', 'image_url' => URL::current() . '/img/stroll.png'],
            ['name' => 'Esteban', 'lastname' => 'Ocon', 'apodo' => '', 'nationality' => 'FR', 'number' => '31', 'image_url' => URL::current() . '/img/ocon.png'],
            ['name' => 'Yuki', 'lastname' => 'Tsunoda', 'apodo' => '', 'nationality' => 'JP', 'number' => '22', 'image_url' => URL::current() . '/img/tsu.png'],
            ['name' => 'Kimi', 'lastname' => 'Raikkonen', 'apodo' => '', 'nationality' => 'FI', 'number' => '7', 'image_url' => URL::current() . '/img/kimi.png'],
            ['name' => 'Antonio', 'lastname' => 'Giovinazzi', 'apodo' => '', 'nationality' => 'IT', 'number' => '99', 'image_url' => URL::current() . '/img/gio.png'],
            ['name' => 'George', 'lastname' => 'Russell', 'apodo' => '', 'nationality' => 'GB', 'number' => '63', 'image_url' => URL::current() . '/img/russ.png'],
            ['name' => 'Mick', 'lastname' => 'Schumacher', 'apodo' => '', 'nationality' => 'DE', 'number' => '47', 'image_url' => URL::current() . '/img/sch.png'],
            ['name' => 'Nikita', 'lastname' => 'Mazepin', 'apodo' => '', 'nationality' => 'RU', 'number' => '9', 'image_url' => URL::current() . '/img/mazepin.png'],
            ['name' => 'Nicholas', 'lastname' => 'Latifi', 'apodo' => '', 'nationality' => 'CA', 'number' => '6', 'image_url' => URL::current() . '/img/latifi.png'],
        ];

        Driver::insert($data);

        $data = [
            [
                'race_name' => 'Bahrain Grand Prix 2021',
                'circuit_name' => 'Bahrain International Circuit',
                'country' => 'BH',
                'season' => '2021',
                'date' => '2021/03/28',
                'race_results' => '{ "1": { "driver": "https://formula1api.herokuapp.com/api/driver/hamilton","team": "Mercedes-AMG Petronas F1 Team", "DNF": false, "fastest_lap": false}, "2": { "driver": "https://formula1api.herokuapp.com/api/driver/verstappen","team": "Red Bull Racing Honda", "DNF": false, "fastest_lap": false}, "3": { "driver": "https://formula1api.herokuapp.com/api/driver/bottas","team": "Mercedes-AMG Petronas F1 Team", "DNF": false, "fastest_lap": false}, "4": { "driver": "https://formula1api.herokuapp.com/api/driver/norris","team": "McLaren F1 Team", "DNF": false, "fastest_lap": false}, "5": { "driver": "https://formula1api.herokuapp.com/api/driver/pérez","team": "Red Bull Racing Honda", "DNF": false, "fastest_lap": false }, "6": { "driver": "https://formula1api.herokuapp.com/api/driver/leclerc","team": "Scuderia Ferrari Mission Winnow", "DNF": false, "fastest_lap": false }, "7": { "driver": "https://formula1api.herokuapp.com/api/driver/ricciardo","team": "McLaren F1 Team", "DNF": false, "fastest_lap": false }, "8": { "driver": "https://formula1api.herokuapp.com/api/driver/sainz","team": "Scuderia Ferrari Mission Winnow", "DNF": false, "fastest_lap": false }, "9": { "driver": "https://formula1api.herokuapp.com/api/driver/tsunoda","team": "Scuderia AlphaTauri Honda", "DNF": false, "fastest_lap": false }, "10": { "driver": "https://formula1api.herokuapp.com/api/driver/stroll","team": "Aston Martin Cognizant F1 Team", "DNF": false, "fastest_lap": false }, "11": { "driver": "https://formula1api.herokuapp.com/api/driver/raikkonen","team": "Alfa Romeo Racing Orlen", "DNF": false, "fastest_lap": false }, "12": { "driver": "https://formula1api.herokuapp.com/api/driver/giovinazzi","team": "Alfa Romeo Racing Orlen", "DNF": false, "fastest_lap": false }, "13": { "driver": "https://formula1api.herokuapp.com/api/driver/ocon","team": "Alpine F1 Team", "DNF": false, "fastest_lap": false }, "14": { "driver": "https://formula1api.herokuapp.com/api/driver/russell","team": "Williams Racing", "DNF": false, "fastest_lap": false }, "15": { "driver": "https://formula1api.herokuapp.com/api/driver/vettel","team": "Aston Martin Cognizant F1 Team", "DNF": false, "fastest_lap": false }, "16": { "driver": "https://formula1api.herokuapp.com/api/driver/schumacher","team": "Uralkali Haas F1 Team", "DNF": false, "fastest_lap": false }, "17": { "driver": "https://formula1api.herokuapp.com/api/driver/gasly","team": "Scuderia AlphaTauri Honda", "DNF": true, "fastest_lap": false }, "18": { "driver": "https://formula1api.herokuapp.com/api/driver/latifi","team": "Williams Racing", "DNF": true, "fastest_lap": false }, "19": { "driver": "https://formula1api.herokuapp.com/api/driver/alonso","team": "Alpine F1 Team", "DNF": true, "fastest_lap": false }, "20": { "driver": "https://formula1api.herokuapp.com/api/driver/mazepin","team": "Uralkali Haas F1 Team", "DNF": true, "fastest_lap": false } }',
                'qualy_results' => '{ "1": { "driver": "https://formula1api.herokuapp.com/api/driver/verstappen","team": "Red Bull Racing Honda"}, "2": { "driver": "https://formula1api.herokuapp.com/api/driver/hamilton","team": "Mercedes-AMG Petronas F1 Team"}, "3": { "driver": "https://formula1api.herokuapp.com/api/driver/bottas","team": "Mercedes-AMG Petronas F1 Team"}, "4": { "driver": "https://formula1api.herokuapp.com/api/driver/leclerc","team": "Scuderia Ferrari Mission Winnow"}, "5": { "driver": "https://formula1api.herokuapp.com/api/driver/gasly","team": "Scuderia AlphaTauri Honda"}, "6": { "driver": "https://formula1api.herokuapp.com/api/driver/ricciardo","team": "McLaren F1 Team"}, "7": { "driver": "https://formula1api.herokuapp.com/api/driver/norris","team": "McLaren F1 Team"}, "8": { "driver": "https://formula1api.herokuapp.com/api/driver/sainz","team": "Scuderia Ferrari Mission Winnow"}, "9": { "driver": "https://formula1api.herokuapp.com/api/driver/alonso","team": "Alpine F1 Team"}, "10": { "driver": "https://formula1api.herokuapp.com/api/driver/stroll","team": "Aston Martin Cognizant F1 Team"}, "11": { "driver": "https://formula1api.herokuapp.com/api/driver/pérez","team": "Red Bull Racing Honda"}, "12": { "driver": "https://formula1api.herokuapp.com/api/driver/giovinazzi","team": "Alfa Romeo Racing Orlen"}, "13": { "driver": "https://formula1api.herokuapp.com/api/driver/tsunoda","team": "Scuderia AlphaTauri Honda"}, "14": { "driver": "https://formula1api.herokuapp.com/api/driver/raikkonen","team": "Alfa Romeo Racing Orlen"}, "15": { "driver": "https://formula1api.herokuapp.com/api/driver/russell","team": "Williams Racing"}, "16": { "driver": "https://formula1api.herokuapp.com/api/driver/ocon","team": "Alpine F1 Team" }, "17": { "driver": "https://formula1api.herokuapp.com/api/driver/latifi","team": "Williams Racing"}, "18": { "driver": "https://formula1api.herokuapp.com/api/driver/vettel","team": "Aston Martin Cognizant F1 Team"}, "19": { "driver": "https://formula1api.herokuapp.com/api/driver/schumacher","team": "Uralkali Haas F1 Team"}, "20": { "driver": "https://formula1api.herokuapp.com/api/driver/mazepin","team": "Uralkali Haas F1 Team"} }'
            ],
        ];

        Races::insert($data);
    }
}
