<?php

namespace PhilMareu\Models;

use Illuminate\Database\Eloquent\Model;

class BlogSeries extends Model
{
    public function posts()
    {
        return $this->morphMany(Post::class, 'postable');
    }
}
