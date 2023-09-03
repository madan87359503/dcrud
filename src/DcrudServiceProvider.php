<?php

namespace Madan\Dcrud;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Migrations\Migration;
class DcrudServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
   public function boot()
{
}

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php', 'dcrud');
        $this->loadMigrationsFrom(__DIR__.'database/migrations', 'dcrud');
        $this->loadViewsFrom(__DIR__.'/views', 'dcrud', 'dcrud');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/dcrud', 'dcrud'),
        ]);
		$this->publishes([
            __DIR__.'/public_assets' => base_path('public/vendors', 'dcrud'),
        ]);
		$this->publishes([
            __DIR__.'/public_assets/essentials' => base_path('public', 'dcrud'),
        ]);
        $this->publishes([
        __DIR__ . '/views/resources/js' =>
        resource_path('assets/vendor/dcrud'
        )], 'dcrud');
        $this->publishes([
        __DIR__.'/config/dcrud.php' => config_path('dcrud.php', 'dcrud'),
    ]);
    }
}
