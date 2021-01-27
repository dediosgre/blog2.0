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
        //
        User::create([
            'name'=> 'Xavier De Dios',
            'email'=>'dediosgre@gmail.com',
            'password'=>bcrypt('asdasd123')
        ]);

        User::factory(9)->create();
    }
}
