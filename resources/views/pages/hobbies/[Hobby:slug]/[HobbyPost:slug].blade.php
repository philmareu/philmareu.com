<?php

use function Laravel\Folio\name;

name('hobby.hobbyPost.show')

?>

<x-layout>
    <x-header :title="$hobbyPost->name"/>
    <section class="w-1/2 mx-auto mt-16">
        <div>{{ $hobbyPost->date->format('M d, Y') }}</div>
        <div class="mt-2 prose">{!! \Illuminate\Support\Str::markdown($hobbyPost->content) !!}</div>
    </section>
</x-layout>
