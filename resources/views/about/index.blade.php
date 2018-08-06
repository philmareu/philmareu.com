@extends('layout.layouts.default')

@section('title')
    About
@endsection

@section('description')

@endsection

@section('default-content')
    <div class="uk-container">
        <div class="uk-grid-divider" uk-grid>
            <div class="uk-width-3-4@s">
                <p class="uk-clearfix"><img src="images/original/photo-of-phil-mareu.jpg" alt="" class="uk-align-left uk-width-1-3 uk-width-1-6@s">Hi, I’m Phil Mareu. I am a professional web designer and developer with almost 10 years of experience. I strive to build the best UI/UX for web applications and drive it with sensible coding practices and techniques. When I’m not building web things you can find me playing disc golf, hiking, or enjoying a tasty beverage while BBQing.</p>

                <p class="uk-clearfix"><img src="images/original/bailey-and-phil-wedding-photo.jpg" alt="" class="uk-align-right uk-width-1-3 uk-width-1-6@s">In 2014, I married Bailey DeReus and we both legally changed our last name to Mareu. Mareu is a mash-up of my previous last name "Martinez" and her maiden name "DeReus". We both work remotely from our laptops and last year decided to hit the road full-time. Today, we both travel the U.S. while doing great things on the web. We sometimes blog at mareulife.com.</p>

                <hr>

                <h2 class="uk-text-center">Skills</h2>
                <p class="uk-container uk-width-1-2@s uk-text-center uk-margin-large-bottom">I specialize in Laravel and Vue application development and also design and code the frontend of almost all of my projects.</p>

                <div class="uk-container uk-width-3-4@s uk-text-right uk-margin-large-bottom">
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-1-2 uk-width-1-4@s">
                            PHP/MySQL
                        </div>
                        <div class="uk-width-1-2 uk-width-3-4@s">
                            <progress id="js-progressbar" class="uk-progress" value="90" max="100"></progress>
                        </div>
                    </div>

                    <div class="uk-margin-remove-top uk-flex-middle" uk-grid>
                        <div class="uk-width-1-2 uk-width-1-4@s">
                            Laravel
                        </div>
                        <div class="uk-width-1-2 uk-width-3-4@s">
                            <progress id="js-progressbar" class="uk-progress" value="95" max="100"></progress>
                        </div>
                    </div>

                    <div class="uk-margin-remove-top uk-flex-middle" uk-grid>
                        <div class="uk-width-1-2 uk-width-1-4@s">
                            HTML/CSS
                        </div>
                        <div class="uk-width-1-2 uk-width-3-4@s">
                            <progress id="js-progressbar" class="uk-progress" value="95" max="100"></progress>
                        </div>
                    </div>

                    <div class="uk-margin-remove-top uk-flex-middle" uk-grid>
                        <div class="uk-width-1-2 uk-width-1-4@s">
                            Vue.js
                        </div>
                        <div class="uk-width-1-2 uk-width-3-4@s">
                            <progress id="js-progressbar" class="uk-progress" value="70" max="100"></progress>
                        </div>
                    </div>
                </div>

                <hr>

                <h2 class="uk-text-center">Experience</h2>

                <p class="uk-container uk-width-1-2@s uk-text-center uk-margin-large-bottom">Over the last 10 years, I have worked on hundreds of projects and a large variety of tools and technologies.</p>

                <div class="uk-child-width-1-3@s" uk-grid="masonry: true;">
                    <div>
                        <div class="uk-card uk-card-default uk-card-small uk-card-body">
                            <h3 class="uk-card-title">PHP</h3>
                            <ul class="uk-list">
                                <li>Laravel</li>
                                <li>Codeigniter</li>
                                <li>PHP Storm</li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-small uk-card-body">
                            <h3 class="uk-card-title">JS</h3>
                            <ul class="uk-list">
                                <li>Vue.js</li>
                                <li>jQuery</li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-small uk-card-body">
                            <h3 class="uk-card-title">CMS</h3>
                            <ul class="uk-list">
                                <li>PyroCMS 2</li>
                                <li>WordPress</li>
                                <li>Drupal</li>
                                <li>Shopify</li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-small uk-card-body">
                            <h3 class="uk-card-title">CSS</h3>
                            <ul class="uk-list">
                                <li>jQuery</li>
                                <li>Bootstrap</li>
                                <li>Responsive</li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-small uk-card-body">
                            <h3 class="uk-card-title">APIs</h3>
                            <ul class="uk-list">
                                <li>Algolia</li>
                                <li>Stripe</li>
                                <li>Paypal</li>
                                <li>Amazon</li>
                                <li>Dark Sky</li>
                                <li>RETS (Real estate MLS)</li>
                                <li>Twillio</li>
                                <li>Patron (Library auth)</li>
                                <li>Brewery</li>
                                <li>PDGA</li>
                                <li>Google Geocode</li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-small uk-card-body">
                            <h3 class="uk-card-title">Services</h3>
                            <ul class="uk-list">
                                <li>Github</li>
                                <li>Bitbucket</li>
                                <li>Laravel Forge</li>
                                <li>Digital Ocean</li>
                                <li>Algolia</li>
                                <li>Pusher</li>
                                <li>Mandrill</li>
                                <li>Mailgun</li>
                                <li>Composer</li>
                                <li>Vagrant</li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-small uk-card-body">
                            <h3 class="uk-card-title">Mapping</h3>
                            <ul class="uk-list">
                                <li>Google Maps</li>
                                <li>Mapbox</li>
                                <li>Leaftet</li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-small uk-card-body">
                            <h3 class="uk-card-title">Conversions</h3>
                            <ul class="uk-list">
                                <li>Blogspot to WordPress</li>
                                <li>WordPress to PyroCMS</li>
                                <li>WordPress to Laravel</li>
                                <li>PyroCMS to Laravel</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-4@s">
                <h3>Social</h3>
                <a href="https://github.com/philmareu" class="uk-icon-button" uk-icon="icon: github"></a>
                <a href="https://twitter.com/philmareu" class="uk-icon-button" uk-icon="icon: twitter"></a>
                <a href="http://dribbble.com/philmareu" class="uk-icon-button" uk-icon="icon: dribbble"></a>
                <a href="https://www.behance.net/philmareud1d9" class="uk-icon-button" uk-icon="icon: behance"></a>
                <a href="https://www.linkedin.com/in/philmareu" class="uk-icon-button" uk-icon="icon: linkedin"></a>
                <h3>Active Projects</h3>

                <div class="uk-inline uk-dark uk-margin">
                    <a href="{{ url('projects/dg-tournaments') }}">
                        <img src="{{ url('images/original/levvmBHNIrlfik3LqXYcjYBOiVYLRcPlH3qXRjumiPY3WncsDgq0x0TXCw8Li7menjzmqIokHyAgQE2lpeEOzb1sylaQa3qEvvlO.png') }}" alt="">
                        <div class="uk-overlay-primary uk-position-cover">
                            <div class="uk-position-center">
                                DG Tournaments
                            </div>
                        </div>
                    </a>
                </div>

                <div class="uk-inline uk-dark">
                    <a href="{{ url('projects/laramanager') }}">
                        <img src="{{ url('images/original/Qfy2DiL0EgXMSeUJ2xv3iiLJuqQDFdtHp1RoGyQ1tK1HvFF3sGZCRaRLujRtiHnRBwrYOlkG38NQwLYXzfdMz8oKYEhoyR1ItYLa.png') }}" alt="">
                        <div class="uk-overlay-primary uk-position-cover">
                            <div class="uk-position-center">
                                Laramanager
                            </div>
                        </div>
                    </a>
                </div>

                <h3>Education</h3>

                <p>2007, Bachelor degree in Mechanical Engineering from the University of Kansas</p>
            </div>
        </div>
    </div>
@endsection
