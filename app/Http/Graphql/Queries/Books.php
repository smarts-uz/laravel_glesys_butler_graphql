<?php

namespace App\Http\Graphql\Queries;

use App\Models\Book;

class Books
{
    public function __invoke()
    {
        return Book::all();
    }
}
