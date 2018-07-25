<?php

namespace PhilMareu\Models;

use Illuminate\Database\Eloquent\Model;
use PhilMareu\Laramanager\Models\LaramanagerImage;

class Project extends Model
{
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function image()
    {
        return $this->belongsTo(LaramanagerImage::class, 'laramanager_image_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class)->latest();
    }

    public function screenshots()
    {
        return $this->belongsToMany(LaramanagerImage::class)->orderBy('ordinal', 'asc');
    }
}
