<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'title' => fake()->title,
            'publication_year' => fake()->dateTime,
            'author_id' => Author::inRandomOrder()->first()->id,
            'updated_at' => Carbon::now(),
        ];
    }
}
