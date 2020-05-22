<?php

use App\Model\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::truncate();
        User::create([
            'username'  =>  'd3cr33',
            'email' =>  'd3cr33@gmail.com',
            'password'  =>  \Illuminate\Support\Facades\Hash::make('123456789'),
        ]);
        for ($i=1; $i<5; $i++){
            factory(User::class)->create();
        }
    }
}
