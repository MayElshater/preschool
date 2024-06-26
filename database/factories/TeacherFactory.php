<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Teacher;
use Illuminate\Support\Facades\File;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       // Get all image files from the specified directory
       //$imagePath = public_path('images/teachers');
      // $imageFiles = File::files($imagePath);

       // Pick a random image file
       //$randomImage = $this->faker->randomElement($imageFiles);

       return [
           'first_name' => $this->faker->firstName,
           'last_name' => $this->faker->lastName,
           'phone' => $this->faker->phoneNumber(),
           'email' => $this->faker->unique()->safeEmail(),
           'subject' => $this->faker->randomElement(['English Teacher', 'Math Teacher', 'Science Teacher', 'Computer Teacher']),
           'image' => $this->faker->randomElement(['assets\img\team-1.jpg', 'assets\img\team-2.jpg', 'assets\img\team-3.jpg']), // Relative path to public directory
           'published' => $this->faker->boolean(),
       ];}
}
