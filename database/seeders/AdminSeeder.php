<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'id' => 1,
            'name' => 'Pradipta Bhuin',
            'email' => 'admin@hotmail.com',
            'usertype' => 1,
            'password' => Hash::make('admin12345')
        ]);
    }
}
