<?php namespace PhilMareu\Collections; 

use Illuminate\Database\Eloquent\Collection;

class WorksCollection extends Collection {

    public function applications()
    {
        return $this->filter(function($work) {
            return $work->type == 'application';
        });
    }

    public function websites()
    {
        return $this->filter(function($work) {
            return $work->type == 'website';
        });
    }

}