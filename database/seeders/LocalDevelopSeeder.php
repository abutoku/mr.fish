<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocalDevelopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();

        \App\Models\User::factory(1)->create([
            'name' => 'admin',
            'email'=> 'admin@example.com',
        ]);


    }
}
