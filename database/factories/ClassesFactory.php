<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Classes;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClassesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' =>  $this->faker->randomElement(['Orange', 'Blue Sky', 'Baby Blue', 'Snow White', 'Sun Flower']),
            'no_of_children' => $this->faker->NumberBetween(10,15),
        ];
    }
}
