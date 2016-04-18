<h2 id="contact">Contact Me</h2>
<div class="uk-alert">
    <p>Currently, I am looking for remote contracting opportunities. Please feel free by phone, email or throught the form below. Thanks!</p>
</div>

<div class="uk-grid uk-text-center uk-margin-bottom">
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
        <div class="uk-form-icon uk-width-1-1">
            <i class="uk-icon-user"></i>
            <input type="name" placeholder="Name" class="uk-width-1-1">
        </div>
    </div>

    <div class="uk-form-row uk-margin-bottom">
        <div class="uk-form-icon uk-width-1-1">
            <i class="uk-icon-envelope"></i>
            <input type="email" placeholder="Email" class="uk-width-1-1">
        </div>
    </div>

    <div class="uk-form-row">
        <div class="uk-form-controls">
            <textarea name="message" class="uk-width-1-1" placeholder="Message"></textarea>
        </div>
    </div>

    <div class="uk-form-row">
        <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4">
            <input type="submit" name="submit" value="Send" class="uk-button uk-width-1-1">
        </div>
    </div>
</form>