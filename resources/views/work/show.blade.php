@extends('layouts.default')

@section('header-text')
    <img src="{{ url('images/original/' . $work->logoImage->filename) }}" alt="{{ $work->logoImage->alt }}" class="uk-width-1-1 uk-width-small-1-4">
@endsection

@section('content')

    <div class="uk-block uk-block-muted uk-block-large">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-medium-1-2">
                    <div data-uk-slideset="{default: 1, medium: 1, large: 1}">
                        <div class="uk-slidenav-position">
                            <ul class="uk-grid uk-grid-collapse uk-slideset uk-margin-bottom">
                                @each('work.slide', $work->photos(), 'image')
                            </ul>
                            <a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                            <a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
                        </div>
                        <ul class="uk-slideset-nav uk-dotnav uk-flex-center">...</ul>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <h1>{{ $work->title }}</h1>

                    {!! $work->description !!}

                    @if($work->url != "")
                        <p>
                            <a href="{{ $work->url }}" class="uk-button uk-button-large uk-button-primary">Check it out</a>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="uk-block uk-block-large">
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