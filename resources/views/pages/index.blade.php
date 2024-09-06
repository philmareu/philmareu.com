@php $user = \App\Services\PrimaryUser::retrieve(); @endphp

<x-layout>
    <x-home-header :user="$user"/>
    <div class="w-1/2 mx-auto">
        <livewire:recent-posts/>
    </div>
</x-layout>
