<?php

use App\User;
use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //consultas sql
        //$professions = DB::select('SELECT id FROM professions WHERE title=?', ['Desarrollador back-end']);

        //consultas sql con laravel
        $professionId = Profession::where('title', 'Desarrollador back-end')->value('id');

        // usando eloquent
        factory(User::class)->create([
           'name' => 'Nathaly Amaya',
           'email' => 'dihdwuhd',
           'password' => bcrypt('laravel'),
           'profession_id' => $professionId,
           'is_admin' => true,
         ]);

        factory(User::class)->create([
              'profession_id' => $professionId,
          ]);

        factory(User::class)->create();

        factory(User::class)->create([
              'name' => 'joel',
        ]);

        factory(User::class)->create([
            'name' => 'Ellie',
      ]);

        factory(User::class, 48)->create();
    }
}
