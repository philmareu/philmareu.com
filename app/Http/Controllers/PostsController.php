<?php

namespace PhilMareu\Http\Controllers;

use Illuminate\Http\Request;

use PhilMareu\Http\Requests;
use PhilMareu\Http\Controllers\Controller;
use PhilMareu\Repository\PostRepository;

class PostsController extends Controller
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->postRepository->getPaginated();

        return view('posts.index')
            ->with('posts', $posts);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($year, $month, $day, $slug)
    {
        $post = $this->postRepository->getPostForPage($year, $month, $day, $slug);

        return view('posts.show')
            ->with('post', $post);
    }
}
