<?php

namespace App\Providers;

use App\Repositories\RepositoryExample;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // TODO: Explore why you should use bind vs singleton
        $this->app->bind(RepositoryExample::class);
        // $this->app->singleton(RepositoryExample::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
