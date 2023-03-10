<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use app\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        /*DB::table('units')->insert([
            'name' => 'APT 100',
            'id_owner' => 27
        ]);

        DB::table('units')->insert([
            'name' => 'APT 101',
            'id_owner' => 27
        ]);

        DB::table('units')->insert([
            'name' => 'APT 200',
            'id_owner' => 28
        ]);

        DB::table('units')->insert([
            'name' => 'APT 201',
            'id_owner' => 28
        ]);*/

        DB::table('areas')->insert([
            'allowed' => '1',
            'title' => 'Academia',
            'cover' => 'gyn.jpg',
            'day' => '1,2,3,4,5,6,7',
            'start_time' => '06:00:00',
            'end_time' => '23:00:00'
        ]);

        DB::table('areas')->insert([
            'allowed' => '1',
            'title' => 'Piscina',
            'cover' => 'pool.jpg',
            'day' => '5,6,7',
            'start_time' => '09:00:00',
            'end_time' => '20:00:00'
        ]);

        DB::table('areas')->insert([
            'allowed' => '1',
            'title' => 'Churrasqueira',
            'cover' => 'barbecue.jpg',
            'day' => '5,6,7',
            'start_time' => '09:00:00',
            'end_time' => '20:00:00'
        ]);

        DB::table('walls')->insert([
            'title' => 'Aviso de som',
            'body' => 'Está proibido ouvir som com volume estrapolado nos arredores do condomínio a partir das 21:00:00. SUJEITO A MULTA',
            'datecreated' => '2022-12-03 16:28:00'
        ]);

        DB::table('walls')->insert([
            'title' => 'Academia',
            'body' => 'Está proibido aos condominos usar a ACADEMIA sem uma avaliacao fisica antes.',
            'datecreated' => '2022-12-03 16:28:00'
        ]);



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
