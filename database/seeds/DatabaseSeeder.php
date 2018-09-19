<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $this->truncateTables([
           'professions',
           'users',
        ]);

        // $this->call(UsersTableSeeder::class);
        $this->call(ProfessionSeeder::class); // llamando a los seeder creados
        $this->call(UserSeeder::class);
    }

    protected function truncateTables(array $tables)
    {
        foreach ($tables as $table) {
            DB::statement(' TRUNCATE '.$table.' CASCADE; ');
        }

        //DB::statement('TRUNCATE TABLE professions CASCADE;'); //DESHABILITA LA REVISON DE LLAVES FORANEAS
        //DB::table('professions')->truncate(); //vaciar la tabla
    }
}
