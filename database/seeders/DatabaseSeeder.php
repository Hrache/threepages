<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ImagesModelSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run()
    {
        $this->call(ImagesModelSeeder::class);
        \App\Models\TextsModel::factory(10)->create();
    }
}
