<?php

use App\Models\Post;
use function Livewire\Volt\{state};

state([
    'posts' => fn () => Post::limit(5)
        ->get()
]);

?>

<x-layout>
    <x-header title="Posts" />
    @volt
    <section class="w-1/2 mx-auto mt-16 text-center">
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
    @endvolt
</x-layout>
