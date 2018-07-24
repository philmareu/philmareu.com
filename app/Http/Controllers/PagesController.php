<?php

namespace PhilMareu\Http\Controllers;

use Illuminate\Http\Request;
use PhilMareu\LaraManagerBlog\Repositories\PostsRepository;

class PagesController extends Controller
{
    public function home(PostsRepository $postsRepository)
    {
        return view('home.index')->with('posts', $postsRepository->getRecent()->load('project'));
    }

    public function about()
    {
        return view('about.index');
    }
}
