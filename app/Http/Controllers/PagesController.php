<?php

namespace PhilMareu\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use PhilMareu\Http\Requests;
use PhilMareu\Http\Requests\SendMessageRequest;
use PhilMareu\Models\Page;
use PhilMareu\Models\Work;

class PagesController extends Controller
{
    public function home(Page $page, Work $work)
    {
        $page = $page->with('objects')->where('uri', '/')->first();
        $works = $work->with('primaryImage')->orderBy('ordinal', 'asc')->get();

        return view('pages.home', compact('page', 'works'));
    }

    public function page(Request $request, Page $page)
    {
        $page = $page->with('objects')->where('uri', $request->path())->first();

        return view('pages.default', compact('page'));
    }

    public function contact(Request $request, Page $page)
    {
        $page = $page->with('objects')->where('uri', $request->path())->first();

        return view('pages.contact', compact('page'));
    }

    public function postContact(SendMessageRequest $request)
    {
        Mail::send('emails.contact', ['data' => $request->all()], function ($m) use ($request) {
            $m->from($request->email, $request->name);
            $m->to('phil@philsquare.com', 'Phil Mareu')->subject($request->subject);
        });

        return redirect()->back()->with('success', 'Thanks for contacting me. I will get back with you soon.');
    }
}
