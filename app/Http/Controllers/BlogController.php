<?php

namespace PhilMareu\Http\Controllers;

use Illuminate\Http\Request;
use PhilMareu\LaraManagerBlog\Repositories\PostsRepository;
use PhilMareu\Models\Post;

class BlogController extends \PhilMareu\LaraManagerBlog\Http\Controllers\BlogController
{
    public function __construct(PostsRepository $postsRepository)
    {
        $postsRepository = new PostsRepository(new Post);

        parent::__construct($postsRepository);
    }
}
