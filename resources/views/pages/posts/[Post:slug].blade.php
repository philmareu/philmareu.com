<x-layout>
    <x-header :title="$post->name" />

    <section class="w-1/2 mx-auto mt-16">
        <div class="mt-4">
            <div>{{ $post->published_at->format('M d, Y') }}</div>
            <div class="mt-2 prose">{!! \Illuminate\Support\Str::markdown($post->content) !!}</div>
        </div>
    </section>
</x-layout>
