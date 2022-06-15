<?php

namespace Charef\FreeTranslateApi;

use Illuminate\Support\ServiceProvider;

class FreeTranslateAPIServideProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Charef\FreeTranslateApi\TranslateAPI');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
