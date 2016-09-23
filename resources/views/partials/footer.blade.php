<h2 id="contact">Hire Me</h2>
<div class="uk-alert">
    <p>Currently, I am looking for part-time remote contracting opportunities. Please feel free to contact me by phone, email, or the form below. Thanks!</p>
</div>

<div class="uk-grid uk-grid-collapse uk-grid-divider uk-text-center uk-margin-bottom">
    <div class="uk-width-medium-1-2">
        <span class="phone-number"><i class="uk-icon-phone"></i> 785-813-1799</span>
    </div>
    <div class="uk-width-medium-1-2">
        <a href="mailto:philmareu@gmail.com"><i class="uk-icon-envelope"></i> philmareu@gmail.com</a>
    </div>
</div>

<form action="{{ url('contact') }}" class="uk-form uk-form-stacked" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="uk-form-row uk-margin-bottom">
        <span class="uk-text-danger">{{ $errors->first('name') }}</span>
        <div class="uk-form-icon uk-width-1-1">
            <i class="uk-icon-user"></i>
            <input type="text" name="name" placeholder="Name" class="uk-width-1-1" value="{{ old('name') }}">
        </div>
    </div>

    <div class="uk-form-row uk-margin-bottom">
        <span class="uk-text-danger">{{ $errors->first('email') }}</span>
        <div class="uk-form-icon uk-width-1-1">
            <i class="uk-icon-envelope"></i>
            <input type="email" placeholder="Email" class="uk-width-1-1" name="email" value="{{ old('email') }}">
        </div>
    </div>

    <div class="uk-form-row">
        <span class="uk-text-danger">{{ $errors->first('message') }}</span>
        <div class="uk-form-controls">
            <textarea name="message" class="uk-width-1-1" placeholder="Message">{{ old('message') }}</textarea>
        </div>
    </div>

    <div class="uk-form-row">
        <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4">
            <input type="submit" name="submit" value="Send" class="uk-button uk-width-1-1 uk-text-contrast">
        </div>
    </div>
</form>