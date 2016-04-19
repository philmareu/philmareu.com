<?php

namespace PhilMareu\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class NavigationViewComposer {

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $segment = $this->request->segment(1);
        $segments = $this->request->segments();
        $path = $this->request->path();

        $view->with(compact('segment', 'segments', 'path'));
    }
}