<?php

namespace Database\Factories;

use App\Models\CategoryConfiguration;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryConfigurationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'category_id'=>$this->faker->numberBetween(1,10),
            'key'=>$this->faker->randomElement(['min_participant','max_participant','full']),
            'type'=>$this->faker->randomElement(['integer','boolean']),
            'default'=>$this->faker->randomElement(['null']),
            'value'=>$this->faker->randomElement(['3','6','true','false'])
        ];
    }
}
