<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Quote;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Quote::factory(10)->create();

        Project::create([
            'title' => 'Sunforus T - shirt Himawari',
            'description' => 'Jayalah sunforus ku',
            'image' => 'sunfor.jpg'
        ]);
    }
}
