<?php
namespace Gazatem\DBLoggerApi;

use Gazatem\DBLoggerGui\Facade\DBLoggerApi;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class DBLoggerApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupRoutes($this->app->router);
    }

    public function setupRoutes(Router $router)
    {
        $router->group(
            ['namespace' => 'Gazatem\DBLoggerApi\Http\Controllers'],
            function ($router) {
                include __DIR__.'/Http/routes.php';
            }
        );
    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->mergeConfigFrom( __DIR__.'/config/dblogger-api.php', 'dblogger-api');
        $this->app['dblogger-gui'] = $this->app->share(function($app) {
            return new DBLoggerApi;
        });
    }
}
