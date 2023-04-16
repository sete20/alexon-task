<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    protected $admin_namespace = 'App\\Http\\Controllers\\Api\\Admin';
    protected $client_namespace = 'App\\Http\\Controllers\\Api\\Client';
    protected $authentication_namespace = 'App\\Http\\Controllers\\Api\\Authentication';

    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {

            Route::middleware(['auth:admin-api', 'admins_only'])
                ->namespace($this->admin_namespace)
                ->prefix('api/admin')
                ->group(base_path('routes/admin/routes.php'));

            Route::middleware(['auth:client-api', 'clients_only'])
                ->namespace($this->client_namespace)
                ->prefix('api/client')
                ->group(base_path('routes/client/routes.php'));

            Route::middleware('api')
                ->namespace($this->authentication_namespace)
                ->prefix('api/authentications')
                ->group(base_path('routes/authentications.php'));


            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     */
    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
