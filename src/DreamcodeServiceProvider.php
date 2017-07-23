<?php 
namespace Dreamcode\Goe;

use Illuminate\Support\ServiceProvider;

class DreamcodeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom($this->config_path('site.php'), 'site');

        $this->loadRoutesFrom($this->base_path('routes/web.php'));
        $this->loadViewsFrom($this->resource_path('views'), 'goe');

        $this->publishes([$this->config_path('site.php') => config_path('site.php')]);
    }

    private function base_path($path)
    {
        $base = __DIR__;
        return $base.'/'.$path;
    }

    private function resource_path($path)
    {
        return $this->base_path('resources/'.$path);
    }

    private function config_path($path)
    {
        return $this->base_path('config/'.$path);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \Dreamcode\Goe\App\Repositories\Store\StoreRepositoryInterface::class,
            \Dreamcode\Goe\App\Repositories\Store\StoreEloquentRepository::class
        );
    }
}
