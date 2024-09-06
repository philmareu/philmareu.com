@php $user = \App\Services\PrimaryUser::retrieve() @endphp

<x-layout>
    <x-header title="About" />

    <section class="w-1/2 mx-auto mt-16">
        <div class="prose max-w-none">{!! \Illuminate\Support\Str::markdown($user->about) !!}</div>
        <livewire:timeline />
    </section>
</x-layout>
