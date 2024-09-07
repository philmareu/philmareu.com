<?php

use App\Models\Project;
use function Livewire\Volt\{state};

state([
    'projects' => fn() => Project::orderBy('year', 'desc')
        ->get()
]);

?>

<x-layout>
    <x-header title="Projects"/>
    @volt
    <section class="w-1/2 mx-auto mt-16">
        <div>
            @foreach($projects as $project)
                <div>
                    <div>
                        <img src="{{ $project->featured_image }}" alt="Featured image for {{ $project->name }} project">
                    </div>
                    <div>{{ $project->year }}</div>
                    <div>{{ $project->name }}</div>
                    <div>{{ $project->summary }}</div>
                    @if(filled($project->url))
                    <div>
                        <a href="{{ $project->url }}">{{ $project->url_name }}</a>
                    </div>
                    @endif
                    <div>
                        @foreach($project->technologies as $technology)
                            <div>{{ $technology->name }}</div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    @endvolt
</x-layout>
