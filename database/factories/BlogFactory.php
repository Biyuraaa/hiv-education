<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
            'user_id' => \App\Models\User::where('role', 'admin')->get()->random()->id,
            'category_id' => Category::all()->random()->id,
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
