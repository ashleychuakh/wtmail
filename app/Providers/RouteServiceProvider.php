<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    public function register() 
    {
        parent::register();

        # register the API V1 routes
       $this->app->register(\App\Providers\ApiRouteServiceProvider::class);
    }

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //
        parent::boot($router);
        
        $router->model('account', 'App\Models\Account');
        $router->model('client', 'App\Models\Client');
        $router->model('lead', 'App\Models\Lead');
        $router->model('mailtracking', 'App\Models\MailTracking');
        $router->model('mailprovider', 'App\Models\MailProvider');
        $router->model('trackingdata', 'App\Models\TrackingData');
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
