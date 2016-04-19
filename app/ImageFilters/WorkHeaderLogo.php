<?php namespace PhilMareu\ImageFilters; 

use Intervention\Image\Filters\FilterInterface;
use Intervention\Image\Image;

class WorkHeaderLogo implements FilterInterface {

    /**
     * Applies filter to given image
     *
     * @param  Image $image
     * @return Image
     */
    public function applyFilter(Image $image)
    {
        return $image->resize(400, 200, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
    }

}