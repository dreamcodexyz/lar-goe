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
        $this->loadRoutesFrom( $this->base_path('routes/web.php') );
    }

    private function base_path($path)
    {
        $base = __DIR__;
        return $base.'/'.$path;
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
