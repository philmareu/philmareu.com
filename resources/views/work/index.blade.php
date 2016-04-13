@extends('layouts.default')

@section('title')
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet asperiores assumenda dicta ducimus enim harum laborum laudantium maiores minima, modi nam neque obcaecati porro, provident quia quos ut vitae.
@endsection

@section('content')

    <div class="uk-block uk-block-muted uk-block-large">
        <div class="uk-container uk-container-center">
            <h2>Select Work</h2>
            <div class="uk-grid uk-grid-width-1-2 uk-grid-width-medium-1-3" data-uk-grid-margin>

                @each('work.work', $works, 'work')

            </div>

            <a href="{{ url('work') }}">What to know more? Contact me today.</a>

        </div>
    </div>

@endsection