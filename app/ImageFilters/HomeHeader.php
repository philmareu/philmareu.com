<?php namespace PhilMareu\ImageFilters; 

use Intervention\Image\Filters\FilterInterface;

class HomeHeader implements FilterInterface {

    /**
     * Applies filter to given image
     *
     * @param  \Intervention\Image\Image $image
     * @return \Intervention\Image\Image
     */
    public function applyFilter(\Intervention\Image\Image $image)
    {
        return $image->fit(1920, 500);
    }
}