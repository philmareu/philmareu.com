<?php

use App\Models\Post;
use function Livewire\Volt\{state};

state([
    'posts' => fn () => Post::limit(5)
        ->get()
]);

?>

<section class="mt-16 text-center">
    <h2 class="font-serif font-bold text-3xl">Recent Posts</h2>
    <div>
        @foreach($posts as $post)
            <div class="mt-4">
                <a href="{{ url('posts/' . $post->slug) }}" class="text-teal-600 text-xl">{{ $post->name }}</a>
                <div>{{ $post->published_at->format('M d, Y') }}</div>
                <p class="mt-2">{{ $post->summary }}</p>
            </div>
        @endforeach
    </div>
</section>
