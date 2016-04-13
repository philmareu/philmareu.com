@extends('layouts.default')

@section('title')
    <img src="{{ url('images/original/' . $work->logoImage->filename) }}" alt="{{ $work->logoImage->alt }}">
@endsection

@section('content')

    <div data-uk-slideset="{default: 4}">
        <div class="uk-slidenav-position">
            <ul class="uk-grid uk-slideset">
                @each('work.slide', $work->photos(), 'image')
                @each('work.slide', $work->photos(), 'image')
                @each('work.slide', $work->photos(), 'image')
                @each('work.slide', $work->photos(), 'image')
                @each('work.slide', $work->photos(), 'image')
            </ul>
            <a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
            <a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
        </div>
        <ul class="uk-slideset-nav uk-dotnav uk-flex-center">...</ul>
    </div>

    <div class="uk-block uk-block-muted uk-block-large">
        <div class="uk-container uk-container-center">
            <h2>{{ $work->title }}</h2>

            {!! $work->description !!}
        </div>
    </div>

    @foreach($work->objects as $object)
        @if(view()->exists('vendor/laramanager/objects/' . $object->slug . '/display'))
            @include('vendor/laramanager/objects/' . $object->slug . '/display')
        @else
            @include('laramanager::objects/' . $object->slug . '/display')
        @endif
    @endforeach

    <a href="{{ url('work') }}">What to know more? Contact me today.</a>

@endsection