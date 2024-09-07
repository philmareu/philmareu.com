<?php

use App\Enums\ProjectTypes;
use App\Models\Project;
use function Livewire\Volt\{state};

state([
    'projects' => fn() => Project::orderBy('year', 'desc')
        ->where('type', ProjectTypes::WEBSITE)
        ->get()
]);

?>

<div>
    <div class="grid md:grid-cols-2 gap-4 mt-8 first:mt-0">
        @foreach($projects as $project)
            <div class="p-4 border">
                <div class="font-serif font-bold text-2xl">{{ $project->year }} - {{ $project->name }}</div>
                @if(filled($project->url))
                    <div class="">
                        <a href="{{ $project->url }}" class="">{{ $project->url_name }}</a>
                    </div>
                @endif
                <div class="basis-1/2 space-x-3 mt-2 uppercase text-slate-950/70 font-bold">
                    @foreach($project->technologies as $technology)
                        <span
                            class="px-3 py-1 bg-slate-300 border border-slate-800/20 rounded text-sm">{{ $technology->name }}</span>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

</div>
