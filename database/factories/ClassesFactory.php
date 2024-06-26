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
            'name' =>  $this->faker->randomElement(['Art & Drawing', 'Color Management', 'Athletic & Dance', 'Language & Speaking', 'Religion & History','general knowledge']),
            'price'=>$this->faker->NumberBetween(50,300),
            //'age'=>$this->faker->NumberBetween(3,5),
            //'time'=>$this->faker->time(),
            'no_of_children' => $this->faker->NumberBetween(10,15),
            'image' => $this->faker->randomElement(['assets\img\classes-1.jpg', 'assets\img\classes-2.jpg', 'assets\img\classes-3.jpg','assets\img\classes-4.jpg','assets\img\classes-5.jpg','assets\img\classes-6.jpg']),

        ];
    }
}
