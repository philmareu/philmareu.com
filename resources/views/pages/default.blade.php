@extends('layouts.default')

@section('title')
    {{ $page->title }}
@endsection

@section('header-text')
    {{ $page->title }}
@endsection

@section('content')

    <div class="uk-block uk-block-muted">
        <div class="uk-width-1-2 uk-container-center">
            @foreach($page->objects as $object)
                @if(view()->exists('vendor/laramanager/objects/' . $object->slug . '/display'))
                    @include('vendor/laramanager/objects/' . $object->slug . '/display')
                @else
                    @include('laramanager::objects/' . $object->slug . '/display')
                @endif
            @endforeach
        </div>
    </div>

@endsection