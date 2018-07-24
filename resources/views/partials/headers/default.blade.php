@include('partials.navigation.primary')

<header class="uk-padding uk-margin-large-bottom">
    <div class="uk-container uk-container-small uk-text-center">
        <h1>@yield('title')</h1>
        <p>@yield('description')</p>
        <div>@yield('actions')</div>
    </div>
</header>
