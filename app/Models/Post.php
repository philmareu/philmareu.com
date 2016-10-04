<?php

namespace PhilMareu\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'published',
        'posted_at',
        'body',
        'header_code',
        'summary'
    ];

    protected $dates = ['posted_at'];
}
