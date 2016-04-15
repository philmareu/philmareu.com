@extends('layouts.default')

@section('header-text')
    <img src="{{ url('images/original/' . $work->logoImage->filename) }}" alt="{{ $work->logoImage->alt }}" class="uk-width-1-2 uk-width-small-1-1">
@endsection

@section('content')

    <div data-uk-slideset="{default: 2, small: 2, medium: 4, large: 6}">
        <div class="uk-slidenav-position">
            <ul class="uk-grid uk-grid-small uk-slideset uk-margin-bottom">
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

    <div class="uk-block ">
        <div class="uk-container uk-container-center">
            @foreach($work->objects as $object)
                @if(view()->exists('vendor/laramanager/objects/' . $object->slug . '/display'))
                    @include('vendor/laramanager/objects/' . $object->slug . '/display')
                @else
                    @include('laramanager::objects/' . $object->slug . '/display')
                @endif
            @endforeach
        </div>
    </div>

    <a href="{{ url('work') }}">What to know more? Contact me today.</a>

@endsection