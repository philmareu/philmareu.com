<?php

namespace PhilMareu\Providers;

use Illuminate\Support\ServiceProvider;
use PhilMareu\LaraManagerBlog\Repositories\PostsRepository;
use PhilMareu\Models\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(PostsRepository::class, function ($app) {
            return new PostsRepository(new Post);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
