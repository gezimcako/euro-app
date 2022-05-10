<?php

namespace Database\Factories;

use App\Models\CategoryConfiguration;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryConfigurationKeysFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->randomElement(['min_participant','max_participant','full']),
            'extra'=>$this->faker->numberBetween(1,50)
        ];
    }
}
