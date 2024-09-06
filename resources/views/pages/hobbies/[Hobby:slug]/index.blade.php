<x-layout>
    <x-header :title="$hobby->name" />
    <section class="w-1/2 mx-auto mt-16 text-center">
        <div>
            @foreach($hobby->hobbyPosts as $post)
                <div class="mt-4">
                    <a href="{{ route('hobby.hobbyPost.show', ['hobby' => $hobby, 'hobbyPost' => $post]) }}" class="text-teal-600 text-xl">{{ $post->name }}</a>
                    <div>{{ $post->date->format('M d, Y') }}</div>
                    <p class="mt-2">{{ $post->summary }}</p>
                </div>
            @endforeach
        </div>
    </section>
</x-layout>
