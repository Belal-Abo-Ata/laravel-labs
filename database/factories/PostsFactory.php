<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $firstNames = ["Alice", "Michael", "Emily", "David", "Sarah", "Charles", "Jennifer", "Robert", "Margaret", "William", "Ashley", "Daniel", "Jessica", "James", "Amanda", "Christopher", "Elizabeth", "Matthew", "Stephanie", "Andrew"];
        $lastNames = ["Smith", "Brown", "Jones", "Miller", "Williams", "Garcia", "Hernandez", "Moore", "Lewis", "Johnson", "Clark", "Robinson", "Campbell", "Young", "Allen", "Wright", "Scott", "Walker", "King", "Baker"];
        $uniqueSets = [];

        for ($i = 0; $i < 1; $i++) {
            // Generate a random index for unique names
            $firstNameIndex = rand(0, count($firstNames) - 1);
            $lastNameIndex = rand(0, count($lastNames) - 1);

            // Ensure unique email by appending a random number
            $uniqueEmail = strtolower($firstNames[$firstNameIndex] . "." . $lastNames[$lastNameIndex] . rand(100, 999) . "@example.com");

            // Check if email already exists (avoid duplicates)
            while (in_array($uniqueEmail, array_column($uniqueSets, 'email'))) {
                // Generate a new unique email if a duplicate is found
                $uniqueEmail = strtolower($firstNames[$firstNameIndex] . "." . $lastNames[$lastNameIndex] . rand(100, 999) . "@example.com");
            }

            $uniqueSets = [
              'name' => $firstNames[$firstNameIndex] . " " . $lastNames[$lastNameIndex],
              'email' => $uniqueEmail
            ];
        }

        var_dump($uniqueSets);

        return $uniqueSets;

    }
}
