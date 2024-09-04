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

<nav>
    <div>
        @foreach($items as $item)
            {{ $item['name'] }}
        @endforeach
    </div>
</nav>
