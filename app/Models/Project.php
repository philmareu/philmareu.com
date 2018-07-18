<?php

namespace PhilMareu\Models;

use Illuminate\Database\Eloquent\Model;
use Philsquare\LaraManager\Models\LaramanagerImage;

class Project extends Model
{
    public function image()
    {
        return $this->belongsTo(LaramanagerImage::class, 'laramanager_image_id');
    }
}
