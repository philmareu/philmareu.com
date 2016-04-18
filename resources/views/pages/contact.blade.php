@extends('layouts.default')

@section('header-text')
    Contact
@endsection

@section('content')

    <form action="{{ url('contact') }}" class="uk-form uk-form-stacked" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        @include('laraform::elements.form.text', ['field' => ['name' => 'name', 'label' => 'Your Name']])
        @include('laraform::elements.form.email', ['field' => ['name' => 'email']])
        @include('laraform::elements.form.text', ['field' => ['name' => 'subject']])
        @include('laraform::elements.form.textarea', ['field' => ['name' => 'message']])

        <div class="uk-form-row">
            <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4">
                <input type="submit" name="submit" value="Send" class="uk-button uk-width-1-1 uk-text-contrast">
            </div>
        </div>
    </form>

@endsection