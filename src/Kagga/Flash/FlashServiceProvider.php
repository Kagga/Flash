<?php

namespace Kagga\Flash;

use Illuminate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**Bootstrap the application events.
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'flash');

        $this->publishes([
            __DIR__ . '/../../resources/views' => base_path('resources/views/vendor/flash')
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Kagga\Flash\SessionStore',
            'Kagga\Flash\LaravelSession');

        $this->app->singleton('flash', function () {
            return $this->app->make('Kagga\Flash\Flash');
        });
    }


}
