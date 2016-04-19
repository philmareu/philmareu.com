<?php namespace PhilMareu\ImageFilters;

use Intervention\Image\Filters\FilterInterface;
use Intervention\Image\Image;

class WorkSlider implements FilterInterface {

    /**
     * Applies filter to given image
     *
     * @param  Image $image
     * @return Image
     */
    public function applyFilter(Image $image)
    {
        return $image->resize(1000, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->encode('jpg', 80);
    }

}