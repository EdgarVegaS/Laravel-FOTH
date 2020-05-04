<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapMovieRoutes();

        $this->mapCategoryRoutes();

        $this->mapUserRoutes();

        $this->mapFavoriteRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }

    protected function mapMovieRoutes()
    {
      Route::prefix('movie')
        ->middleware('web')
        ->group(base_path('routes/movie.php'));
    }

    protected function mapCategoryRoutes()
    {
      Route::prefix('category')
        ->middleware('web')
        ->group(base_path('routes/category.php'));
    }

    protected function mapUserRoutes()
    {
      Route::prefix('user')
        ->middleware('web')
        ->group(base_path('routes/user.php'));
    }

    protected function mapFavoriteRoutes()
    {
      Route::prefix('favorite')
        ->middleware('web')
        ->group(base_path('routes/favorite.php'));
    }

    protected function mapRoleRoutes()
    {
      Route::prefix('role')
        ->middleware('web')
        ->group(base_path('routes/role.php'));
    }
}
