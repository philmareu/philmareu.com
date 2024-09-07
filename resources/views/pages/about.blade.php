@php $user = \App\Services\PrimaryUser::retrieve() @endphp

<x-layout>
    <x-header title="About" />

    <section class="px-8 md:px-0 md:w-4/5 lg:w-1/2 mx-auto mt-16">
        <div class="prose max-w-none">{!! \Illuminate\Support\Str::markdown($user->about) !!}</div>
        <livewire:timeline />
    </section>
</x-layout>
