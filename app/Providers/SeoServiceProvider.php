<?php

declare(strict_types=1);

namespace Modules\Seo\Providers;

<<<<<<< HEAD
use Illuminate\Support\ServiceProvider;
use Modules\Seo\Services\MetatagService;

class SeoServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected string $moduleName = 'Seo';

    /**
     * @var string
     */
    protected string $moduleNameLower = 'seo';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerConfig();
        $this->registerViews();
        $this->loadMigrationsFrom(module_path($this->moduleName, 'database/migrations'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MetatagService::class, function ($app) {
            return new MetatagService();
        });
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            module_path($this->moduleName, 'config/config.php') => config_path($this->moduleNameLower . '.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'config/config.php'), $this->moduleNameLower
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    protected function registerViews()
    {
        $viewPath = resource_path('views/modules/' . $this->moduleNameLower);

        $sourcePath = module_path($this->moduleName, 'resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ], ['views', $this->moduleNameLower . '-module-views']);

        $this->loadViewsFrom($sourcePath, $this->moduleNameLower);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array<string>
     */
    public function provides(): array
    {
        return [
            MetatagService::class,
        ];
    }
=======
use Modules\Xot\Providers\XotBaseServiceProvider;

class SeoServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Seo';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;
>>>>>>> 2ff0df4 (.)
}
