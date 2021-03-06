<?php

namespace Database\Seeders;

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
        \App\Models\Photo::factory(10)->create();
        \App\Models\Album::factory(10)->create();
        \App\Models\User::factory(10)->create();
    }
}
