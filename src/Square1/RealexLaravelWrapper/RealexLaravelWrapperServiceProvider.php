<?php namespace Square1\RealexLaravelWrapper;

use Illuminate\Support\ServiceProvider;

class RealexLaravelWrapperServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('square1/realex-laravel-wrapper');
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function booting()
    {
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('RealexLaravelWrapper', 'Square1\RealexLaravelWrapper\Facades\RealexLaravelWrapper');
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['realexwrapper'] = $this->app->share(function ($app) {
            return new RealexLaravelWrapper;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('realexwrapper');
    }
}
