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
            ['name' => 'Valtteri', 'lastname' => 'Bottas', 'apodo' => '', 'nationality' => 'FI', 'number' => '77', 'image_url' => 'http://127.0.0.1:8000/img/bottas.png'],
            ['name' => 'Charles', 'lastname' => 'Leclerc', 'apodo' => '', 'nationality' => 'MC', 'number' => '16', 'image_url' => 'http://127.0.0.1:8000/img/leclerc.png'],
            ['name' => 'Carlos', 'lastname' => 'Sainz', 'apodo' => '', 'nationality' => 'ES', 'number' => '55', 'image_url' => 'http://127.0.0.1:8000/img/sainz.png'],
            ['name' => 'Charles', 'lastname' => 'Leclerc', 'apodo' => '', 'nationality' => 'MC', 'number' => '16', 'image_url' => 'http://127.0.0.1:8000/img/leclerc.png'],
            ['name' => 'Pierre', 'lastname' => 'Gasly', 'apodo' => '', 'nationality' => 'FR', 'number' => '10', 'image_url' => 'http://127.0.0.1:8000/img/gasly.png'],
            ['name' => 'Daniel', 'lastname' => 'Ricciardo', 'apodo' => '', 'nationality' => 'AU', 'number' => '3', 'image_url' => 'http://127.0.0.1:8000/img/ric.png'],
            ['name' => 'Sebastian', 'lastname' => 'Vettel', 'apodo' => '', 'nationality' => 'GE', 'number' => '5', 'image_url' => 'http://127.0.0.1:8000/img/vet.png'],
            ['name' => 'Fernando', 'lastname' => 'Alonso', 'apodo' => '', 'nationality' => 'ES', 'number' => '14', 'image_url' => 'http://127.0.0.1:8000/img/alo.png'],
            ['name' => 'Lance', 'lastname' => 'Stroll', 'apodo' => '', 'nationality' => 'CA', 'number' => '18', 'image_url' => 'http://127.0.0.1:8000/img/stroll.png'],
            ['name' => 'Esteban', 'lastname' => 'Ocon', 'apodo' => '', 'nationality' => 'FR', 'number' => '31', 'image_url' => 'http://127.0.0.1:8000/img/ocon.png'],
            ['name' => 'Yuki', 'lastname' => 'Tsunoda', 'apodo' => '', 'nationality' => 'JP', 'number' => '22', 'image_url' => 'http://127.0.0.1:8000/img/tsu.png'],
            ['name' => 'Kimi', 'lastname' => 'Raikkonen', 'apodo' => '', 'nationality' => 'FI', 'number' => '7', 'image_url' => 'http://127.0.0.1:8000/img/kimi.png'],
            ['name' => 'Antonio', 'lastname' => 'Giovinazzi', 'apodo' => '', 'nationality' => 'IT', 'number' => '99', 'image_url' => 'http://127.0.0.1:8000/img/gio.png'],
            ['name' => 'George', 'lastname' => 'Russell', 'apodo' => '', 'nationality' => 'GB', 'number' => '63', 'image_url' => 'http://127.0.0.1:8000/img/russ.png'],
            ['name' => 'Mick', 'lastname' => 'Schumacher', 'apodo' => '', 'nationality' => 'GE', 'number' => '47', 'image_url' => 'http://127.0.0.1:8000/img/sch.png'],
            ['name' => 'Nikita', 'lastname' => 'Mazepin', 'apodo' => '', 'nationality' => 'RU', 'number' => '9', 'image_url' => 'http://127.0.0.1:8000/img/mazepin.png'],
            ['name' => 'Nicholas', 'lastname' => 'Latifi', 'apodo' => '', 'nationality' => 'CA', 'number' => '6', 'image_url' => 'http://127.0.0.1:8000/img/latifi.png'],
        ];

        Driver::insert($data);

        $data = [
            [
                'race_name' => 'Bahrain Grand Prix 2021',
                'circuit_name' => 'Bahrain International Circuit',
                'country' => 'BH',
                'season' => '2021',
                'date' => '2021/03/28',
                'race_results' => '{ "1": { "driver": "http://127.0.0.1:8000/api/driver/hamilton","team": "Mercedes-AMG Petronas F1 Team"}, "2": { "driver": "http://127.0.0.1:8000/api/driver/verstappen","team": "Red Bull Racing Honda"}, "3": { "driver": "http://127.0.0.1:8000/api/driver/bottas","team": "Mercedes-AMG Petronas F1 Team"}, "4": { "driver": "http://127.0.0.1:8000/api/driver/norris","team": "McLaren F1 Team"}, "5": { "driver": "http://127.0.0.1:8000/api/driver/perez","team": "Red Bull Racing Honda"}, "6": { "driver": "http://127.0.0.1:8000/api/driver/leclerc","team": "Scuderia Ferrari Mission Winnow"}, "7": { "driver": "http://127.0.0.1:8000/api/driver/ricciardo","team": "McLaren F1 Team"}, "8": { "driver": "http://127.0.0.1:8000/api/driver/sainz","team": "Scuderia Ferrari Mission Winnow"}, "9": { "driver": "http://127.0.0.1:8000/api/driver/tsunoda","team": "Scuderia AlphaTauri Honda"}, "10": { "driver": "http://127.0.0.1:8000/api/driver/stroll","team": "Aston Martin Cognizant F1 Team"}, "11": { "driver": "http://127.0.0.1:8000/api/driver/raikkonen","team": "Alfa Romeo Racing Orlen"}, "12": { "driver": "http://127.0.0.1:8000/api/driver/giovinazzi","team": "Alfa Romeo Racing Orlen"}, "13": { "driver": "http://127.0.0.1:8000/api/driver/ocon","team": "Alpine F1 Team"}, "14": { "driver": "http://127.0.0.1:8000/api/driver/russell","team": "Williams Racing"}, "15": { "driver": "http://127.0.0.1:8000/api/driver/vettel","team": "Aston Martin Cognizant F1 Team"}, "16": { "driver": "http://127.0.0.1:8000/api/driver/schumacher","team": "Uralkali Haas F1 Team"}, "17": { "driver": "http://127.0.0.1:8000/api/driver/gasly","team": "Scuderia AlphaTauri Honda"}, "18": { "driver": "http://127.0.0.1:8000/api/driver/latifi","team": "Williams Racing"}, "19": { "driver": "http://127.0.0.1:8000/api/driver/alonso","team": "Alpine F1 Team"}, "20": { "driver": "http://127.0.0.1:8000/api/driver/mazepin","team": "Uralkali Haas F1 Team"} }',
                'qualy_results' => '{ "1": { "driver": "http://127.0.0.1:8000/api/driver/hamilton","team": "Mercedes-AMG Petronas F1 Team"}, "2": { "driver": "http://127.0.0.1:8000/api/driver/verstappen","team": "Red Bull Racing Honda"}, "3": { "driver": "http://127.0.0.1:8000/api/driver/bottas","team": "Mercedes-AMG Petronas F1 Team"}, "4": { "driver": "http://127.0.0.1:8000/api/driver/norriss","team": "McLaren F1 Team"}, "5": { "driver": "http://127.0.0.1:8000/api/driver/perez","team": "Red Bull Racing Honda"}, "6": { "driver": "http://127.0.0.1:8000/api/driver/leclerc","team": "Scuderia Ferrari Mission Winnow"}, "7": { "driver": "http://127.0.0.1:8000/api/driver/ricciardo","team": "McLaren F1 Team"}, "8": { "driver": "http://127.0.0.1:8000/api/driver/sainz","team": "Scuderia Ferrari Mission Winnow"}, "9": { "driver": "http://127.0.0.1:8000/api/driver/tsunoda","team": "Scuderia AlphaTauri Honda"}, "10": { "driver": "http://127.0.0.1:8000/api/driver/stroll","team": "Aston Martin Cognizant F1 Team"}, "11": { "driver": "http://127.0.0.1:8000/api/driver/raikkonen","team": "Alfa Romeo Racing Orlen"}, "12": { "driver": "http://127.0.0.1:8000/api/driver/giovinazzi","team": "Alfa Romeo Racing Orlen"}, "13": { "driver": "http://127.0.0.1:8000/api/driver/ocon","team": "Alpine F1 Team"}, "14": { "driver": "http://127.0.0.1:8000/api/driver/russell","team": "Williams Racing"}, "15": { "driver": "http://127.0.0.1:8000/api/driver/vettel","team": "Aston Martin Cognizant F1 Team"}, "16": { "driver": "http://127.0.0.1:8000/api/driver/schumacher","team": "Uralkali Haas F1 Team"}, "17": { "driver": "http://127.0.0.1:8000/api/driver/gasly","team": "Scuderia AlphaTauri Honda"}, "18": { "driver": "http://127.0.0.1:8000/api/driver/latifi","team": "Williams Racing"}, "19": { "driver": "http://127.0.0.1:8000/api/driver/alonso","team": "Alpine F1 Team"}, "20": { "driver": "http://127.0.0.1:8000/api/driver/mazepin","team": "Uralkali Haas F1 Team"} }'
            ],
        ];

        Races::insert($data);
    }
}
