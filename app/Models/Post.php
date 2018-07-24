<?php

namespace PhilMareu\Models;


class Post extends \PhilMareu\LaraManagerBlog\Models\Post
{
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}