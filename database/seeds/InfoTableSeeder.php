<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert([
            'title' => 'Bienvenue à vous',
            'tags' => 'accueil',
            'info_content' => 'Bienvenue sur univ-info',
            'receiver_wording' => 'All',
            'sender_id' => '1',
            'info_cover_pic' => 'infos_pictures/default.png'

        ]); 
    }
}
