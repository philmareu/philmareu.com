<?php

use App\Models\Post;
use function Livewire\Volt\{state};

state([
    'posts' => fn () => Post::limit(5)
        ->get()
]);

?>

<x-layout>
    <h2>Recent Posts</h2>
    @volt
    <div>
        @foreach($posts as $post)
            <div>
                <a href="{{ url('posts/' . $post->slug) }}">{{ $post->name }}</a>
            </div>
        @endforeach
    </div>
    @endvolt
</x-layout>
