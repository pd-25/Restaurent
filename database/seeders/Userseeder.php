<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'id' => 2,
                'name' => 'Akash Mondal',
                'email' => 'akash@hotmail.com',
                'usertype' => 0,
                'password' => Hash::make('akash12345')
                ],
                [
                'id' => 3,
                'name' => 'Rahul Dhara',
                'email' => 'rahul@hotmail.com',
                'usertype' => 0,
                'password' => Hash::make('rahul12345')
                ],
                [
                'id' => 4,
                'name' => 'Debayon Pal',
                'email' => 'debayon@hotmail.com',
                'usertype' => 0,
                'password' => Hash::make('debayon12345')
                ], 
                [
                'id' => 5,
                'name' => 'Tufan Mondol',
                'email' => 'tufan@hotmail.com',
                'usertype' => 0,
                'password' => Hash::make('tufan12345')
                ],
        ];
        foreach($user as $u){
            User::create($u);

        }
    }
}
