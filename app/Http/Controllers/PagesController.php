<?php

namespace PhilMareu\Http\Controllers;

use Illuminate\Http\Request;

use PhilMareu\Http\Requests;
use PhilMareu\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
}
