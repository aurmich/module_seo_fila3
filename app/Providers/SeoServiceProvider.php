<?php

declare(strict_types=1);

namespace Modules\Seo\Providers;

<<<<<<< HEAD
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
=======
use Modules\Xot\Providers\XotBaseServiceProvider;
>>>>>>> 723d9b0 (.)
use Modules\Seo\Services\MetatagService;

/**
 * Service provider for the Seo module.
 *
 * @package Modules\Seo
 */
class SeoServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Seo';
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;

    /**
     * @var string
     */
    protected string $moduleName = 'Seo';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot(): void
    {
        parent::boot();
        $this->registerConfig();
        $this->registerViews();
        $this->loadMigrationsFrom(module_path($this->name, 'database/migrations'));
    }
>>>>>>> 207483e (.)

    /**
     * Register the service provider.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function register(): void
    {
        parent::register();

=======
    public function register()
    {
>>>>>>> 207483e (.)
=======
    public function register(): void
    {
        parent::register();
>>>>>>> 723d9b0 (.)
        $this->app->singleton(MetatagService::class, function ($app) {
            return new MetatagService();
        });
    }

    /**
<<<<<<< HEAD
=======
     * Register config.
     */
    protected function registerConfig(): void
    {
        $this->publishes([
            module_path($this->name, 'config/config.php') => config_path(strtolower($this->name) . '.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path($this->name, 'config/config.php'), strtolower($this->name)
        );
    }

    /**
     * Register views.
     */
    protected function registerViews(): void
    {
        $viewPath = resource_path('views/modules/' . strtolower($this->name));
        $sourcePath = module_path($this->name, 'resources/views');
        $this->publishes([
            $sourcePath => $viewPath
        ], ['views', strtolower($this->name) . '-module-views']);
        $this->loadViewsFrom($sourcePath, strtolower($this->name));
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
