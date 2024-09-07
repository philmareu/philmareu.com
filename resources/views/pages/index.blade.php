@php $user = \App\Services\PrimaryUser::retrieve(); @endphp

<x-layout>
    <x-home-header :user="$user"/>
</x-layout>
