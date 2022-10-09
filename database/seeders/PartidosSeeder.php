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
            'id_estadio' => 1,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-25',
            'hora' => '10:00',
            'id_equipo_1' => 27,
            'id_equipo_2' => 28,
            'id_estadio' => 1,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-25',
            'hora' => '13:00',
            'id_equipo_1' => 13,
            'id_equipo_2' => 19,
            'id_estadio' => 2,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-29',
            'hora' => '12:00',
            'id_equipo_1' => 27,
            'id_equipo_2' => 19,
            'id_estadio' => 8,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-29',
            'hora' => '12:00',
            'id_equipo_1' => 13,
            'id_equipo_2' => 28,
            'id_estadio' => 2,
            'estado' => 1
        ]);
        //////////////////////////
        $user = Partido::create([
            'fecha' => '2022-11-21',
            'hora' => '10:00',
            'id_equipo_1' => 20,
            'id_equipo_2' => 21,
            'id_estadio' => 2,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-21',
            'hora' => '16:00',
            'id_equipo_1' => 14,
            'id_equipo_2' => 17,
            'id_estadio' => 3,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-25',
            'hora' => '07:00',
            'id_equipo_1' => 21,
            'id_equipo_2' => 17,
            'id_estadio' => 3,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-25',
            'hora' => '16:00',
            'id_equipo_1' => 20,
            'id_equipo_2' => 14,
            'id_estadio' => 8,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-29',
            'hora' => '16:00',
            'id_equipo_1' => 20,
            'id_equipo_2' => 17,
            'id_estadio' => 3,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-29',
            'hora' => '16:00',
            'id_equipo_1' => 21,
            'id_equipo_2' => 14,
            'id_estadio' => 1,
            'estado' => 1
        ]);
        //////////////////////////////////////
        $user = Partido::create([
            'fecha' => '2022-11-22',
            'hora' => '07:00',
            'id_equipo_1' => 3,
            'id_equipo_2' => 2,
            'id_estadio' => 4,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-22',
            'hora' => '13:00',
            'id_equipo_1' => 24,
            'id_equipo_2' => 25,
            'id_estadio' => 6,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-26',
            'hora' => '10:00',
            'id_equipo_1' => 2,
            'id_equipo_2' => 25,
            'id_estadio' => 5,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-26',
            'hora' => '16:00',
            'id_equipo_1' => 3,
            'id_equipo_2' => 24,
            'id_estadio' => 4,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-26',
            'hora' => '16:00',
            'id_equipo_1' => 3,
            'id_equipo_2' => 25,
            'id_estadio' => 6,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-30',
            'hora' => '16:00',
            'id_equipo_1' => 2,
            'id_equipo_2' => 24,
            'id_estadio' => 4,
            'estado' => 1
        ]);
        ///////
        $user = Partido::create([
            'fecha' => '2022-11-22',
            'hora' => '10:00',
            'id_equipo_1' => 12,
            'id_equipo_2' => 31,
            'id_estadio' => 5,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-22',
            'hora' => '16:00',
            'id_equipo_1' => 16,
            'id_equipo_2' => 4,
            'id_estadio' => 7,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-26',
            'hora' => '07:00',
            'id_equipo_1' => 4,
            'id_equipo_2' => 31,
            'id_estadio' => 7,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-26',
            'hora' => '13:00',
            'id_equipo_1' => 16,
            'id_equipo_2' => 12,
            'id_estadio' => 6,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-30',
            'hora' => '12:00',
            'id_equipo_1' => 4,
            'id_equipo_2' => 12,
            'id_estadio' => 7,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-30',
            'hora' => '12:00',
            'id_equipo_1' => 16,
            'id_equipo_2' => 31,
            'id_estadio' => 5,
            'estado' => 1
        ]);
        //////////
        $user = Partido::create([
            'fecha' => '2022-11-23',
            'hora' => '10:00',
            'id_equipo_1' => 1,
            'id_equipo_2' => 22,
            'id_estadio' => 2,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-23',
            'hora' => '13:00',
            'id_equipo_1' => 15,
            'id_equipo_2' => 10,
            'id_estadio' => 1,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-27',
            'hora' => '07:00',
            'id_equipo_1' => 10,
            'id_equipo_2' => 22,
            'id_estadio' => 3,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-27',
            'hora' => '16:00',
            'id_equipo_1' => 15,
            'id_equipo_2' => 1,
            'id_estadio' => 8,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-12-01',
            'hora' => '16:00',
            'id_equipo_1' => 15,
            'id_equipo_2' => 22,
            'id_estadio' => 2,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-12-01',
            'hora' => '16:00',
            'id_equipo_1' => 10,
            'id_equipo_2' => 1,
            'id_estadio' => 8,
            'estado' => 1
        ]);
        //////////////////////////
        $user = Partido::create([
            'fecha' => '2022-11-23',
            'hora' => '07:00',
            'id_equipo_1' => 23,
            'id_equipo_2' => 11,
            'id_estadio' => 8,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-23',
            'hora' => '16:00',
            'id_equipo_1' => 5,
            'id_equipo_2' => 8,
            'id_estadio' => 3,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-27',
            'hora' => '10:00',
            'id_equipo_1' => 5,
            'id_equipo_2' => 23,
            'id_estadio' => 1,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-27',
            'hora' => '13:00',
            'id_equipo_1' => 8,
            'id_equipo_2' => 11,
            'id_estadio' => 2,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-12-01',
            'hora' => '12:00',
            'id_equipo_1' => 5,
            'id_equipo_2' => 11,
            'id_estadio' => 3,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-12-01',
            'hora' => '12:00',
            'id_equipo_1' => 5,
            'id_equipo_2' => 23,
            'id_estadio' => 1,
            'estado' => 1
        ]);
        ////////////////////////
        $user = Partido::create([
            'fecha' => '2022-11-24',
            'hora' => '07:00',
            'id_equipo_1' => 30,
            'id_equipo_2' => 7,
            'id_estadio' => 7,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-24',
            'hora' => '16:00',
            'id_equipo_1' => 6,
            'id_equipo_2' => 29,
            'id_estadio' => 4,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-28',
            'hora' => '07:00',
            'id_equipo_1' => 29,
            'id_equipo_2' => 7,
            'id_estadio' => 7,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-28',
            'hora' => '13:00',
            'id_equipo_1' => 6,
            'id_equipo_2' => 30,
            'id_estadio' => 6,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-12-02',
            'hora' => '16:00',
            'id_equipo_1' => 6,
            'id_equipo_2' => 7,
            'id_estadio' => 4,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-12-02',
            'hora' => '16:00',
            'id_equipo_1' => 29,
            'id_equipo_2' => 30,
            'id_estadio' => 6,
            'estado' => 1
        ]);
        /////////////////////
        $user = Partido::create([
            'fecha' => '2022-11-24',
            'hora' => '10:00',
            'id_equipo_1' => 32,
            'id_equipo_2' => 9,
            'id_estadio' => 5,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-24',
            'hora' => '13:00',
            'id_equipo_1' => 26,
            'id_equipo_2' => 18,
            'id_estadio' => 6,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-28',
            'hora' => '10:00',
            'id_equipo_1' => 18,
            'id_equipo_2' => 9,
            'id_estadio' => 5,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-11-28',
            'hora' => '16:00',
            'id_equipo_1' => 26,
            'id_equipo_2' => 32,
            'id_estadio' => 4,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-12-02',
            'hora' => '12:00',
            'id_equipo_1' => 26,
            'id_equipo_2' => 9,
            'id_estadio' => 5,
            'estado' => 1
        ]);
        $user = Partido::create([
            'fecha' => '2022-12-02',
            'hora' => '12:00',
            'id_equipo_1' => 18,
            'id_equipo_2' => 32,
            'id_estadio' => 7,
            'estado' => 1
        ]);
    }
}
