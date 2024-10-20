<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'id' => (string) Str::uuid(),
        'user_id' => User::query()->inRandomOrder()->first()->id,
        'title' => fake()->sentence(),
        'content' => fake()->paragraph(),
        'published' => $isPublished = fake()->boolean(),
        'published_at' => $isPublished ? now() : null,
        'created_at' => now(),
        'updated_at' => now(),
    ];
    }
}
