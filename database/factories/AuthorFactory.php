<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AuthorFactory extends Factory
{
    protected $model = Author::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'name' => fake()->name(),
            'bio' => fake()->realText(360, 2),
            'updated_at' => Carbon::now(),
        ];
    }
}
