<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.nav', function($view)
        {
            $view->with('latest', Post::latest('updated_at')->first());
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
