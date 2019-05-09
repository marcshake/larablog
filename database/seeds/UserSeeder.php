<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([            'name' => 'Marcel Schindler',            'email' => 'demo@demo.dem',            'password' => Hash::make('test')        ]);
    }
}
