<?php

namespace PhilMareu\Http\Controllers;

use Illuminate\Http\Request;

use PhilMareu\Http\Requests;
use PhilMareu\Models\Page;
use PhilMareu\Models\Work;

class PagesController extends Controller
{
    public function home(Page $page, Work $work)
    {
        $page = $page->with('objects')->where('uri', '/')->first();
        $works = $work->with('primaryImage')->get();

        return view('pages.home', compact('page', 'works'));
    }

    public function page(Request $request, Page $page)
    {
        $page = $page->with('objects')->where('uri', $request->path())->first();

        return view('pages.default', compact('page'));
    }
}
