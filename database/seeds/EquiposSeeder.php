<?php

use Illuminate\Database\Seeder;

class EquiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipos')->insert([
           'equipo' => 'Boca Juniors',
            'ganados' => 1,
            'perdidos' => 0,
            'empatados'=> 0,
            'puntos' => 3
        ]);
        DB::table('equipos')->insert([
            'equipo' => 'River Plate',
            'ganados' => 0,
            'perdidos' => 1,
            'empatados'=> 0,
            'puntos' => 0
        ]);
        DB::table('equipos')->insert([
            'equipo' => 'Independiente',
            'ganados' => 0,
            'perdidos' => 1,
            'empatados'=> 0,
            'puntos' => 0
        ]);
        DB::table('equipos')->insert([
            'equipo' => 'Racing',
            'ganados' => 1,
            'perdidos' => 0,
            'empatados'=> 0,
            'puntos' => 3
        ]);
        DB::table('equipos')->insert([
            'equipo' => 'Barcelona FC',
            'ganados' => 0,
            'perdidos' => 0,
            'empatados'=> 0,
            'puntos' => 0
        ]);
        DB::table('equipos')->insert([
            'equipo' => 'Chelsea',
            'ganados' => 0,
            'perdidos' => 0,
            'empatados'=> 0,
            'puntos' => 0
        ]);
        DB::table('equipos')->insert([
            'equipo' => 'Celtic',
            'ganados' => 0,
            'perdidos' => 0,
            'empatados'=> 0,
            'puntos' => 0
        ]);
        DB::table('equipos')->insert([
            'equipo' => 'Paris Saint Germain',
            'ganados' => 0,
            'perdidos' => 0,
            'empatados'=> 0,
            'puntos' => 0
        ]);
    }
}
