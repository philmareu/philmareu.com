<?php

namespace PhilMareu\Http\Controllers;

use Illuminate\Http\Request;
use PhilMareu\Models\BlogSeries;

class BlogSeriesController extends Controller
{
    protected $blogSeries;

    public function __construct(BlogSeries $blogSeries)
    {
        $this->blogSeries = $blogSeries;
    }

    public function index()
    {
        return view('blog_series.index')
            ->with('blogSeries', $this->blogSeries->paginated(10));
    }
}
