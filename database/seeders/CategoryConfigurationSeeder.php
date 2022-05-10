<?php

namespace Database\Seeders;

use App\Models\CategoryConfiguration;
use Illuminate\Database\Seeder;

class CategoryConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryConfiguration::factory(10)->create();
    }
}
