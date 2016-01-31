<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Dingo\Api\Routing\Router as ApiRouter;
use Illuminate\Routing\Router;

class ApiRouteServiceProvider extends ServiceProvider {
    protected $namespace = 'App\Http\Controllers\Api\v1';

    /** This is not quite interesting since it's like laravel ... */
    public function boot(Router $router) {
        parent::boot($router);
    }


   /**
     * Define the API version v1 Application Routes
     * 
     * @param ApiRouter $apiRouter
     */
    public function map(ApiRouter $apiRouter) {
        $apiRouter->version('v1',function ($apiRouter) {
            $apiRouter->group([
                //'prefix' => 'admin',# this was required for me; prefix them as required for you if any
                'namespace' => $this->namespace
                    ], function ($apiRouter) {
                require app_path('Http/api_routes.php');# here we load the api v1 routes
            });
        });
    }


}