<?php
namespace Logistic\Exceptionhandling;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class ExceptionHandlingServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->app->register(\Yajra\DataTables\DataTablesServiceProvider::class);
        $loader = AliasLoader::getInstance();
        $loader->alias('DataTables', '\Yajra\DataTables\Facades');

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'exceptionhandling');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }
    public function register()
    {
    }

}

