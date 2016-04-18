@extends('layouts.home')

@section('content')

    <div class="uk-block uk-block-muted uk-block-large">
        <div class="uk-container uk-container-center">
            <h2>Select Work</h2>
            <div class="uk-grid uk-grid-width-1-2 uk-grid-width-medium-1-3" data-uk-grid-margin data-uk-grid-match="{target:'.uk-panel'}">
                @each('work.work', $works, 'work')
            </div>

            <a href="{{ url('work') }}">What to know more? Contact me today.</a>

        </div>
    </div>

@endsection