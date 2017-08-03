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

        $this->loadMigrationsFrom($this->migration_path());

        $this->loadTranslationsFrom($this->resource_path('lang'), 'dreamcodexyz/lar-goe');

        $this->publishes([
            $this->config_path('site.php') => config_path('site.php')
        ]);

        $this->publishes([
            $this->public_path('assets') => public_path('assets'),
            $this->public_path('pages') => public_path('pages'),
        ], 'public');
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

    private function migration_path()
    {
        return $this->base_path('database/migrations/');
    }

    private function public_path($path)
    {
        return $this->base_path('public/'.$path);
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
