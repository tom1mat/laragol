<?php

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
        DB::table('partidos')->insert([
            'id'=> 1,
            'golesLocal' => 5,
            'golesVisitante' => 2,
            'localId' => 1,
            'visitanteId' => 2,
            'fecha' => '2018-02-05'
        ]);
        DB::table('partidos')->insert([
            'id'=> 2,
            'golesLocal' => 1,
            'golesVisitante' => 2,
            'localId' => 2,
            'visitanteId' => 3,
            'fecha' => '2018-02-04'
        ]);

        DB::table('goles')->insert([
            'partidoId' => 1,
            'jugadorId' => 1
        ]);
        DB::table('goles')->insert([
            'partidoId' => 1,
            'jugadorId' => 1
        ]);
        DB::table('goles')->insert([
            'partidoId' => 1,
            'jugadorId' => 1
        ]);
        DB::table('goles')->insert([
            'partidoId' => 1,
            'jugadorId' => 2
        ]);
        DB::table('goles')->insert([
            'partidoId' => 1,
            'jugadorId' => 2
        ]);

        DB::table('goles')->insert([
            'partidoId' => 1,
            'jugadorId' => 6
        ]);
        DB::table('goles')->insert([
            'partidoId' => 1,
            'jugadorId' => 6
        ]);
        DB::table('goles')->insert([
            'partidoId' => 2,
            'jugadorId' => 10
        ]);
        DB::table('goles')->insert([
            'partidoId' => 2,
            'jugadorId' => 14
        ]);
        DB::table('goles')->insert([
            'partidoId' => 2,
            'jugadorId' => 14
        ]);
    }
}
