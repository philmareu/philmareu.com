@php

    $items = [
        [
            'name' => 'Posts',
            'url' => url('posts'),
            'icon' => '',
        ],
        [
            'name' => 'Projects',
            'url' => url('projects'),
            'icon' => '',
        ],
        [
            'name' => 'Hobbies',
            'url' => url('hobbies'),
            'icon' => '',
        ],
        [
            'name' => 'About',
            'url' => url('about'),
            'icon' => '',
        ]
    ];
@endphp

<nav class="flex items-center p-4">
    <a class="flex grow items-center" href="{{ url('/') }}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 498 499" class="w-8"><title>Phil Mareu Logo</title><rect x="223" y="351" width="50" height="148" class="fill-amber-950" /><rect x="50" y="50" width="174" height="198" fill="none"/><path d="M0,0V499H50V298H274V50H448V499h50V0H0ZM224,248H50V50H224Z" class="fill-amber-950" /></svg>
        <div class="ml-4">{{ auth()->user()->name }}</div>
    </a>
    @foreach($items as $item)
        <a href="{{ $item['url'] }}" class="px-4">{{ $item['name'] }}</a>
    @endforeach
</nav>
