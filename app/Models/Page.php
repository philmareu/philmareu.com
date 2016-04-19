<?php

namespace PhilMareu\Models;

use Illuminate\Database\Eloquent\Model;
use Philsquare\LaraManager\Database\Objectable;

class Page extends Model
{
    use Objectable;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'uri'
    ];

}
