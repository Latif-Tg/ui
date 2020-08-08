<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $admin = User::create([
            'role' => 'administrateur',
            'university' => 'Université de Lomé (UL)',
            'name' => 'Dr AKEREBURU',
            'email' => 'akereburu@admin.com',
            'password' => Hash::make('password')
        ]);

        $student = User::create([
            'role' => 'étudiant',
            'university' => 'Université de Lomé (UL)',
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password' =>  Hash::make('password')
        ]);

        $corporate = User::create([
            'role' => 'Entreprise',
            'university' => 'null',
            'name' => 'TOGOCEL',
            'email' => 'togocel@corporate.com',
            'password' =>  Hash::make('password')
        ]);
    }
}
