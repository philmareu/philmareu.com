<header class="bg-stripes">
    @include('partials.navigation.primary')

    <section class="uk-section uk-text-center uk-margin-large-bottom">
        <div class="uk-container uk-container-small">
            <h1>@yield('title')</h1>
            <p>@yield('description')</p>
            <div>@yield('actions')</div>
        </div>
    </section>
</header>
