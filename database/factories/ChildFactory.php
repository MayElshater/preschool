<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Classes;
use App\Models\Parents;
use App\Models\Child;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Child>
 */
class ChildFactory extends Factory
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
            'first_name' => $this->faker->firstname,
            'last_name'=> $this->faker->lastname,
            'date_of_birth'=> $this->faker->date(),
            'grade'=> $this->faker->NumberBetween(1,2),
            'parent_id' => Parents::factory(),
            'class_id' => Classes::factory(), 

        ];
    }
}
