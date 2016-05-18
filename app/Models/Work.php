<?php

namespace PhilMareu\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Philsquare\LaraManager\Database\Objectable;
use Philsquare\LaraManager\Models\Image;

class Work extends Model
{
    use Objectable;

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'description',
        'primary_image',
        'logo',
        'images',
        'url',
        'ordinal'
    ];

    public function primaryImage()
    {
        return $this->belongsTo('Philsquare\LaraManager\Models\Image', 'primary_image');
    }

    public function logoImage()
    {
        return $this->belongsTo('Philsquare\LaraManager\Models\Image', 'logo');
    }

    public function gallery()
    {
        return $this->belongsToMany('Philsquare\LaraManager\Models\Image')->orderBy('ordinal', 'asc');
    }
}
