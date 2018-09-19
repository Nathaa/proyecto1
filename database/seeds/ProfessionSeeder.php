<?php

use App\Profession;
use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //Sentencias sql directo a la base de datos
        // DB::insert('INSERT INTO professions(title) VALUES (:title)', [
        //  'Desarrollador back-end', ]);

        //Sentencias del contructor de laravel
        //  DB::table('professions')->insert([
        //       'title' => 'Desarrollador back-end',
        // ]);

        //utilizando eloquent

        Profession::create([
            'title' => 'Desarrollador back-end',
      ]);

        Profession::create([
            'title' => 'Programador',
        ]);

        Profession::create([
            'title' => 'Aanalista',
        ]);

        factory(Profession::class, 15)->create();
    }
}
