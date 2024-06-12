<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Child;
use App\Models\Teacher; 
use App\Models\Classes;
use App\Models\Parents;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        /*

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
        $children = Child::factory(20)->create();
        $teachers = Teacher::factory(20)->create();
        $parents = Parents::factory(20)->create();
        $classes = Classes::factory(20)->create();

        // Attach children to teachers (many-to-many relationship)
        $teachers->each(function ($teacher) use ($children) {
            $teacher->children()->attach(
                $children->random(rand(1, 10))->pluck('id')->toArray()
            );
        });

        // Attach teachers to classes (many-to-many relationship)
        $teachers->each(function ($teacher) use ($classes) {
            $teacher->classes()->attach(
                $classes->random(rand(1, 10))->pluck('id')->toArray()
            );
        });

        
    }
}
