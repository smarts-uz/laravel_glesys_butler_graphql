<?php

namespace App\Http\Graphql\Queries;

use App\Models\Author;

class Authors
{
    public function __invoke()
    {
        return Author::all();
    }
}
