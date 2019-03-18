<?php

namespace Dniccum\NovaDocumentation;

use Dniccum\NovaDocumentation\Library\MarkdownUtility;
use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Dniccum\NovaDocumentation\Http\Middleware\Authorize;

class ToolServiceProvider extends ServiceProvider
{
    private $config = 'novadocumentation';

    /**
     * @var MarkdownUtility $utility
     */
    protected $utility;

    /**
     * Bootstrap any application services.
     *
     * @throws \Exception
     * @return void
     */
    public function boot()
    {
        $this->utility = new MarkdownUtility();

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'nova-documentation');

        $this->app->booted(function () {
            $this->routes();
        });

        $options = $this->utility->buildPageRoutes1();

        Nova::serving(function (ServingNova $event) use ($options) {
            Nova::provideToScript([
                'pages' => $options,
            ]);
        });

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/'.$this->config.'.php' => base_path('config/'.$this->config.'.php'),
            ], 'config');
            $this->publishes([__DIR__.'/../database/migrations/2019_03_15_183015_documentation.php' => database_path('migrations/2019_03_15_183015_documentation.php')], 'config');
        }
    }

    /**
     * Register the tool's routes.
     *
     * @return void
     */
    protected function routes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        Route::middleware(['nova', Authorize::class])
                ->prefix('nova-vendor/nova-documentation')
                ->group(__DIR__.'/../routes/api.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/'.$this->config.'.php', $this->config);
    }
}
