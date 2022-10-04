<?php

namespace Database\Seeders;

use App\Models\Partido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Partido::create([
            'fecha' => '2022-11-20',
            'hora' => '13:00',
            'id_equipo_1' => 27,
            'id_equipo_2' => 13,
            'id_estadio' => 8,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-21',
            'hora' => '13:00',
            'id_equipo_1' => 28,
            'id_equipo_2' => 19,
            'id_estadio' => 8,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-25',
            'hora' => '10:00',
            'id_equipo_1' => 27,
            'id_equipo_2' => 28,
            'id_estadio' => 2,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-25',
            'hora' => '13:00',
            'id_equipo_1' => 13,
            'id_equipo_2' => 19,
            'id_estadio' => 3,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-29',
            'hora' => '12:00',
            'id_equipo_1' => 27,
            'id_equipo_2' => 19,
            'id_estadio' => 4,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-29',
            'hora' => '12:00',
            'id_equipo_1' => 13,
            'id_equipo_2' => 28,
            'id_estadio' => 5,
            'estado' => 1
        ]);
    }
}
