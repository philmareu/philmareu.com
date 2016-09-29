@extends('layouts.default')

@section('header-text')
    @include('partials.work.header')
@endsection

@section('content')

    <div class="uk-block uk-block-muted">
        <div class="uk-container uk-container-center">
            <h2>About</h2>
            <div class="uk-grid">
                <div class="uk-width-medium-1-2">
                    <div data-uk-slideset="{default: 1, medium: 1, large: 1}">
                        <div class="uk-slidenav-position">
                            <ul class="uk-grid uk-grid-collapse uk-slideset uk-margin-bottom">
                                @each('work.slide', $work->gallery, 'image')
                            </ul>
                            <a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                            <a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
                        </div>
                        <ul class="uk-slideset-nav uk-dotnav uk-flex-center">...</ul>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    {!! $work->description !!}
                    @if($work->url != "")
                        <p>
                            <a href="{{ $work->url }}" class="uk-button uk-button-large uk-button-primary">Check it out</a>
                        </p>
                    @endif
                </div>
            </div>

            @each('laramanager::objects.render', $work->objects, 'object')
        </div>
    </div>
@endsection