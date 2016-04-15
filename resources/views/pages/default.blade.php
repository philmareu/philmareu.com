@extends('layouts.default')

@section('header-text')
    {{ $page->title }}
@endsection

@section('content')

    @foreach($page->objects as $object)
        @if(view()->exists('vendor/laramanager/objects/' . $object->slug . '/display'))
            @include('vendor/laramanager/objects/' . $object->slug . '/display')
        @else
            @include('laramanager::objects/' . $object->slug . '/display')
        @endif
    @endforeach

@endsection