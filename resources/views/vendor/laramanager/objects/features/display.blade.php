<div class="uk-margin-large">
    <div uk-grid>
        <div class="uk-width-1-2@s">
            <img src="{{ url('images/original/' . $object->data('filename')) }}" alt="">
        </div>
        <div class="uk-width-1-2@s">
            <h3>{{ $object->data('title') }}</h3>
            <p>{{ $object->data('description') }}</p>
        </div>
    </div>
</div>