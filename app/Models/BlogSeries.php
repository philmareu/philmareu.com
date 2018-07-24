<?php

namespace PhilMareu\Models;

use Illuminate\Database\Eloquent\Model;

class BlogSeries extends Model
{
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function posts()
    {
        return $this->morphMany(Post::class, 'postable');
    }
}
