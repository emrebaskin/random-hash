<?php
namespace RandomHash\RandomHash;
use Illuminate\Support\ServiceProvider;
class RandomHashServiceProvider extends ServiceProvider
{
    /**
     * Boot the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('RandomHash\RandomHash\RandomHash');
    }
}