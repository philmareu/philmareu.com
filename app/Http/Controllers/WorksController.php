<?php

namespace PhilMareu\Http\Controllers;

use Illuminate\Http\Request;

use PhilMareu\Http\Requests;
use PhilMareu\Http\Controllers\Controller;
use PhilMareu\Models\Work;

class WorksController extends Controller
{
    public function index(Work $work)
    {
        $works = $work->with('primaryImage')->get();

        return view('work.index', compact('works'));
    }

    public function show(Request $request, Work $work)
    {
        $work = $work->with('objects', 'logoImage')->where('slug', $request->segment(2))->first();

        return view('work.show', compact('work'));
    }
}
