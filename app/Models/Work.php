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
        'url'
    ];

    public function getPhotoIds()
    {
        $photoIds = unserialize($this->images);

        return is_array($photoIds) ? $photoIds : [];
    }

    public function photos()
    {
        $ids = $this->getPhotoIds();

        if(count($ids) == 0) return [];

        $idsOrdered = implode(',', $ids);

        return Image::whereIn('id', $ids)
            ->orderByRaw(DB::raw("FIELD(id, $idsOrdered)"))
            ->get();
    }

    public function primaryImage()
    {
        return $this->belongsTo('Philsquare\LaraManager\Models\Image', 'primary_image');
    }

    public function logoImage()
    {
        return $this->belongsTo('Philsquare\LaraManager\Models\Image', 'logo');
    }
}
