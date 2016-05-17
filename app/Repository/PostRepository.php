<?php

namespace PhilMareu\Repository;

use Carbon\Carbon;
use PhilMareu\Models\Post;

class PostRepository {

    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function getRecent()
    {
        return $this->post->orderBy('posted_at', 'desc')
            ->wherePublished(1)
            ->where('posted_at', '<', Carbon::now())
            ->limit(4)
            ->get();
    }

    public function getPaginated($limit = 10)
    {
        return $this->post->orderBy('posted_at', 'desc')
            ->where('posted_at', '<', Carbon::now())
            ->wherePublished(1)
            ->paginate($limit);
    }

    public function getPostForPage($year, $month, $day, $slug)
    {
        return $this->post
            ->wherePublished(1)
            ->where('posted_at', 'LIKE', "$year-$month-$day%")
            ->whereSlug($slug)
            ->first();
    }
}