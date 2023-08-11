<?php

namespace App\Http\Graphql\Types;

class Book
{
    public function title(\App\Models\Book $book)
    {
        return $book->title;
    }
}
