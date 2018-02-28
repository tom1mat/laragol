<?php

use Illuminate\Database\Seeder;

class JugadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jugadores')->insert([
            'jugador' => 'Juan Perez',
            'equipoId' => 1,
            'cantGoles' => 3
        ]);
        DB::table('jugadores')->insert([
            'jugador' => 'Juan Lopez',
            'equipoId' => 1,
            'cantGoles' => 2
        ]);
        DB::table('jugadores')->insert([
            'jugador' => 'Juan Gutierrez',
            'equipoId' => 1,
            'cantGoles' => 0
        ]);
        DB::table('jugadores')->insert([
            'jugador' => 'Juan Mateo',
            'equipoId' => 1,
            'cantGoles' => 0
        ]);

        DB::table('jugadores')->insert([
            'jugador' => 'Pablo Perez',
            'equipoId' => 2,
            'cantGoles' => 0
        ]);
        DB::table('jugadores')->insert([
            'jugador' => 'Pablo Lopez',
            'equipoId' => 2,
            'cantGoles' => 2
        ]);
        DB::table('jugadores')->insert([
            'jugador' => 'Pablo Gutierrez',
            'equipoId' => 2,'cantGoles' => 0
        ]);
        DB::table('jugadores')->insert([
            'jugador' => 'Pablo Mateo',
            'equipoId' => 2,
            'cantGoles' => 0
        ]);

        DB::table('jugadores')->insert([
            'jugador' => 'Fabian Perez',
            'equipoId' => 3,
            'cantGoles' => 0
        ]);
        DB::table('jugadores')->insert([
            'jugador' => 'Fabian Lopez',
            'equipoId' => 3,
            'cantGoles' => 1
        ]);
        DB::table('jugadores')->insert([
            'jugador' => 'Fabian Gutierrez',
            'equipoId' => 3,
            'cantGoles' => 0
        ]);
        DB::table('jugadores')->insert([
            'jugador' => 'Fabian Mateo',
            'equipoId' => 3,
            'cantGoles' => 0
        ]);

        DB::table('jugadores')->insert([
            'jugador' => 'Jonatan Perez',
            'equipoId' => 4,
            'cantGoles' => 0
        ]);
        DB::table('jugadores')->insert([
            'jugador' => 'Jonatan Lopez',
            'equipoId' => 4,
            'cantGoles' => 2
        ]);
        DB::table('jugadores')->insert([
            'jugador' => 'Jonatan Gutierrez',
            'equipoId' => 4,
            'cantGoles' => 0
        ]);
        DB::table('jugadores')->insert([
            'jugador' => 'Jonatan Mateo',
            'equipoId' => 4,
            'cantGoles' => 0
        ]);
    }
}
