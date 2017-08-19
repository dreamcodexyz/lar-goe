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
        $this->loadViewsFrom($this->resource_path('views/v2'), 'goe');

        $this->loadMigrationsFrom($this->migration_path());

        $this->publishes([
            $this->config_path('site.php') => config_path('site.php')
        ]);

        $this->publishes([
            $this->public_path('assetsv3') => public_path('assets'),
            $this->public_path('pagesv3') => public_path('pages'),
        ], 'public');

        $this->loadTranslationsFrom($this->resource_path('lang'), 'goe');


        $this->app['router']->aliasMiddleware('core_loading', 'Dreamcode\Goe\App\Http\Middleware\CoreLoading');
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

        $models = array(
            'Store',
            'Customer',
            'Settings'
        );

        foreach ($models as $model) {
            $this->app->singleton(
                "Dreamcode\Goe\App\Repositories\\{$model}\\{$model}RepositoryInterface",
                "Dreamcode\Goe\App\Repositories\\{$model}\\{$model}EloquentRepository"
            );
        }

    }
}
