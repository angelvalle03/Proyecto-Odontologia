<?php

namespace Database\Seeders;

use App\Models\User;


use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Angel Valle',
            'email'=>'angelvalle172@gmail.com',
            'password'=> bcrypt('Odonto-angel')
        ])->assignRole('admin');

        User::create([
            'name'=>'Jorge valdelamar',
            'email'=>'jorge123@gmail.com',
            'password'=> bcrypt('Odonto-jorge')
        ]);

        User::create([
            'name'=>'Yiseth Delgado',
            'email'=>'yiseth123@gmail.com',
            'password'=> bcrypt('Odonto-yise')
        ]);

        User::create([
            'name'=>'Daniel Baldiris',
            'email'=>'daniel123@gmail.com',
            'password'=> bcrypt('Odonto-daniel')
        ]);

        User::create([
            'name'=>'Jhon Herrera',
            'email'=>'jhona123@gmail.com',
            'password'=> bcrypt('Odonto-jhon')
        ]);
    }
}
