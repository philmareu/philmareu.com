<header class="bg-stripes">
    @include('layout.navigation.primary')

    <section class="uk-section uk-text-center uk-margin-large-bottom">
        <div class="uk-container">
            <img src="{{ url('images/original/photo-of-phil-mareu.jpg') }}" alt="Photo of Phil Mareu" class="uk-border-circle uk-width-1-6 uk-margin-bottom">
            <div class="uk-text-large uk-text-bold">Hi, I'm Phil Mareu</div>
            <div class="uk-text-large">Freelance Developer & Designer</div>
            <div class="uk-width-1-3@s uk-container">
                <p>@yield('description')</p>
                <a href="http://github.com/philmareu"><span uk-icon="icon: github;" class="uk-margin-small-right"></span></a>
                <a href="http://twitter.com/philmareu"><span uk-icon="icon: twitter;" class="uk-margin-small-right"></span></a>
                <a href="http://dribbble.com/philmareu"><span uk-icon="icon: dribbble;" class="uk-margin-small-right"></span></a>
                <a href="https://www.behance.net/philmareud1d9"><span uk-icon="icon: behance;" class="uk-margin-small-right"></span></a>
                <a href="https://www.linkedin.com/in/philmareu"><span uk-icon="icon: linkedin;" class="uk-margin-small-right"></span></a>
                <a href="mailto:philmareu@gmail.com"><span uk-icon="icon: mail;" class="uk-margin-small-right"></span></a>
            </div>
        </div>
    </section>
</header>
