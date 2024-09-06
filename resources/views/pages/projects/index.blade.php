<?php

use App\Models\Project;
use function Livewire\Volt\{state};

state([
    'projects' => fn() => Project::limit(5)
        ->get()
]);

?>

<x-layout>
    <x-header title="Projects"/>
    @volt
    <section class="w-1/2 mx-auto mt-16">
        <div>
            @foreach($projects as $project)
                <div class="flex space-x-8">
                    <div class="basis-1/2">
                        <img src="{{ $project->featured_image }}" alt="Featured image for {{ $project->name }} project">
                    </div>
                    <div class="basis-1/2">
                        <div class="text-xl">{{ $project->name }}</div>
                        <div>{{ $project->year }}</div>
                        <p class="mt-2">{{ $project->summary }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    @endvolt
</x-layout>
