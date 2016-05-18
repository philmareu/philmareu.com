<?php

namespace PhilMareu\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use PhilMareu\Http\Requests;
use PhilMareu\Http\Requests\SendMessageRequest;
use PhilMareu\Models\Page;
use PhilMareu\Models\Work;
use PhilMareu\Repository\PostRepository;

class PagesController extends Controller
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function home(Page $page, Work $work)
    {
        $page = $page->with('objects')->where('uri', '/')->first();
        $works = $work->with('primaryImage')->orderBy('ordinal', 'asc')->get();
        $posts = $this->postRepository->getRecent();

        return view('pages.home')
            ->with('page', $page)
            ->with('works', $works)
            ->with('posts', $posts);
    }

    public function page(Request $request, Page $page)
    {
        $page = $page->with('objects')->where('uri', $request->path())->first();

        return view('pages.default', compact('page'));
    }

    public function about(Request $request, Page $page)
    {
        $page = $page->with('objects')->where('uri', $request->path())->first();

        return view('pages.about', compact('page'));
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
            $m->to('philmareu@gmail.com', 'Phil Mareu')->subject('Message from contact form');
        });

        return redirect()->back()->with('success', 'Thanks for contacting me. I will get back with you soon.');
    }
}
