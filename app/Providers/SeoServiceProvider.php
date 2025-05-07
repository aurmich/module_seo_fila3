<?php

declare(strict_types=1);

namespace Modules\Seo\Providers;

<<<<<<< HEAD
use Modules\Xot\Providers\XotBaseServiceProvider;
use Modules\Seo\Services\MetatagService;
=======
<<<<<<< HEAD
use Modules\Xot\Providers\XotBaseServiceProvider;
>>>>>>> 207483e (.)

class SeoServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Seo';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;
<<<<<<< HEAD
=======
=======
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
>>>>>>> 207483e (.)

    /**
     * Register the service provider.
     *
     * @return void
     */
<<<<<<< HEAD
    public function register(): void
    {
        parent::register();

=======
    public function register()
    {
>>>>>>> 207483e (.)
        $this->app->singleton(MetatagService::class, function ($app) {
            return new MetatagService();
        });
    }

    /**
<<<<<<< HEAD
=======
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
>>>>>>> 207483e (.)
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
<<<<<<< HEAD
=======
>>>>>>> origin/dev
>>>>>>> 207483e (.)
}
