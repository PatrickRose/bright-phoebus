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
        $this->app->bindShared('PatrickRose\Repos\GigRepositoryInterface', function() {
            return new DBGigRepository();
        });
    }
}