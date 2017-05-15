<?php

namespace Lavalite\User\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Load view
        $this->loadViewsFrom(__DIR__.'/../../../../resources/views', 'user');

        // Load translation
        $this->loadTranslationsFrom(__DIR__.'/../../../../resources/lang', 'user');

        // Call pblish redources function
        $this->publishResources();

        include __DIR__.'/../Http/routes.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Bind facade
        $this->app->bind('user', function ($app) {
            return $this->app->make('Lavalite\User\User');
        });

        // Repository binds
        // Bind User to repository
        $this->app->bind(
            \Lavalite\User\Interfaces\UserRepositoryInterface::class,
            \Lavalite\User\Repositories\Eloquent\UserRepository::class
        );
        // Bind Role to repository
        $this->app->bind(
            \Lavalite\User\Interfaces\RoleRepositoryInterface::class,
            \Lavalite\User\Repositories\Eloquent\RoleRepository::class
        );
        // Bind Permission to repository
        $this->app->bind(
            \Lavalite\User\Interfaces\PermissionRepositoryInterface::class,
            \Lavalite\User\Repositories\Eloquent\PermissionRepository::class
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['user'];
    }

    /**
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__.'/../../../../config/config.php' => config_path('package/user.php')], 'config');

        // Publish public view
        $this->publishes([__DIR__.'/../../../../resources/views/public'  => base_path('resources/views/vendor/user/public')], 'view-public');

        // Publish admin view
        $this->publishes([__DIR__.'/../../../../resources/views/admin' => base_path('resources/views/vendor/user/admin')], 'view-admin');

        // Publish language files
        $this->publishes([__DIR__.'/../../../../resources/lang' => base_path('resources/lang/vendor/courier')], 'lang');

        // Publish migrations
        $this->publishes([__DIR__.'/../../../../database/migrations/' => base_path('database/migrations')], 'migrations');

        // Publish seeds
        $this->publishes([__DIR__.'/../../../../database/seeds/' => base_path('database/seeds')], 'seeds');
    }
}
