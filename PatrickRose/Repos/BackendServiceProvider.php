<?php namespace PatrickRose\Repos;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('gigrepositoryinterface', function() {
            return new DBGigRepository();
        });
    }
}