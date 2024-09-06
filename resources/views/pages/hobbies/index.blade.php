<?php

use App\Models\Hobby;
use function Livewire\Volt\{state};

state([
    'hobbies' => fn() => Hobby::limit(5)
        ->get()
]);

?>

<x-layout>
    <x-header title="Hobbies"/>
    @volt
    <section class="w-1/2 mx-auto mt-16 text-center">
        <div>
            @foreach($hobbies as $hobby)
                <div class="mt-4">
                    <a href="{{ url('hobbies/' . $hobby->slug) }}" class="text-teal-600 text-xl">{{ $hobby->name }}</a>
                </div>
            @endforeach
        </div>
    </section>
    @endvolt
</x-layout>
