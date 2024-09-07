<?php

use App\Enums\ProjectTypes;
use App\Models\Project;
use function Livewire\Volt\{state};

state([
    'projects' => fn() => Project::orderBy('year', 'desc')
        ->where('type', ProjectTypes::WEB_APP)
        ->get()
]);

?>

<div>
    @foreach($projects as $project)
        <div class="md:flex space-x-4 mt-8 first:mt-0 border">
            <div class="basis-1/3">
                <img src="{{ $project->featured_image }}"
                     alt="Featured image for the {{ $project->name }} project">
            </div>
            <div class="basis-2/3 p-4">
                <div class="font-serif font-bold text-2xl">{{ $project->year }} - {{ $project->name }}</div>
                @if(filled($project->url))
                    <div class="">
                        <a href="{{ $project->url }}" class="">{{ $project->url_name }}</a>
                    </div>
                @endif
                <div class="flex flex-wrap mt-2 gap-2 uppercase text-slate-950/70 font-bold">
                    @foreach($project->technologies as $technology)
                        <span
                            class="px-3 py-1 bg-slate-300 border border-slate-800/20 rounded text-sm">{{ $technology->name }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
</div>
