@extends('layouts.default')

@section('content')

    <div class="uk-block uk-block-muted uk-block-large">
        <div class="uk-container uk-container-center">
            <h2>DG Chains</h2>

            <div class="uk-grid uk-grid-width-1-2">
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab amet asperiores blanditiis culpa cum, dolorum ea eos, error est excepturi explicabo in nihil nobis numquam odio quibusdam, rerum voluptatem?</p>
                </div>

                <div>
                    Images ?
                </div>

            </div>
        </div>
    </div>

    <div class="uk-block uk-block-large">
        <div class="uk-container uk-container-center">
            <h2>Work Performed</h2>

            <ul class="uk-list">
                <li>Design</li>
                <li>Laravel</li>
                <li>Event driven</li>
                <li>Weather API</li>
            </ul>
        </div>
    </div>

    <a href="{{ url('work') }}">What to know more? Contact me today.</a>

@endsection