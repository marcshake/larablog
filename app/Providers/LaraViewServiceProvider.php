<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\BlogPosts;

class LaraViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('partial.submenu', 'App\Http\ViewComposers\CategoriesComposer');
        View::composer('*', 'App\Http\ViewComposers\SnippetsComposer');
    }
}
