<?php

namespace PhilMareu\Models;

use Illuminate\Database\Eloquent\Model;
use PhilMareu\Laramanager\Models\LaramanagerImage;

class Project extends Model
{
    public function image()
    {
        return $this->belongsTo(LaramanagerImage::class, 'laramanager_image_id');
    }

    public function posts()
    {
        return $this->morphMany(Post::class, 'postable');
    }
}
