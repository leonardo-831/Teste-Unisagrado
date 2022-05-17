<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Leonardo',
            'email' => 'leonardo.belissimo@gmail.com',
            'password' => Hash::make('123')
        ]);
        DB::table('users')->insert([
            'name' => 'Enzo',
            'email' => 'enzo.belissimo@gmail.com',
            'password' => Hash::make('321')
        ]);
    }
}
