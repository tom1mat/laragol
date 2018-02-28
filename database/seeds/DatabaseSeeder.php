<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(EquiposSeeder::class);
        $this->call(PartidosSeeder::class);
        $this->call(JugadoresSeeder::class);
    }
}
