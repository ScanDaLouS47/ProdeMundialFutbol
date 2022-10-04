<?php

namespace Database\Seeders;

use App\Models\Estadio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Estadio::create([
            'nombre_estadio' => 'Al Thumama'
        ]);
        $user = Estadio::create([
            'nombre_estadio' => 'Al Khalifa Internacional'
        ]);
        $user = Estadio::create([
            'nombre_estadio' => 'Ahmed Bin Ali'
        ]);
        $user = Estadio::create([
            'nombre_estadio' => 'Lusail'
        ]);
        $user = Estadio::create([
            'nombre_estadio' => 'Education city'
        ]);
        $user = Estadio::create([
            'nombre_estadio' => 'Estadio 974'
        ]);
        $user = Estadio::create([
            'nombre_estadio' => 'Al Janoub'
        ]);
        $user = Estadio::create([
            'nombre_estadio' => 'Al Bayt'
        ]);
    }
}
