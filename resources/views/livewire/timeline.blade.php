<?php

use App\Models\LifeEvent;
use function Livewire\Volt\{state};

state([
    'events' => LifeEvent::latest()
        ->get(),
])

?>

<div class="mt-16">
    @foreach($events as $event)
        <div class="md:flex sm:space-x-8 mt-8">
            <div class="basis-1/6">
                <img src="{{ $event->image }}" alt="Image relation to {{ $event->name }} event" class="rounded-full aspect-square overflow-hidden w-1/2 mx-auto md:w-full md:mx-0">
            </div>
            <div class="mt-4 md:mt-0 basis-5/6">
                <div class="font-serif text-2xl">{{ $event->year }}</div>
                <div class="font-bold text-xl">{{ $event->name }}</div>
                <div>{{ $event->summary }}</div>
            </div>
        </div>
    @endforeach
</div>
