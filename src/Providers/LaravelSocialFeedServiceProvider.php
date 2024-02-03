<?php

namespace JSCustom\LaravelSocialFeed\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class LaravelSocialFeedServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->registerConfig();
            $this->registerMigrations();
        }
        $this->registerRoutes();
    }
    public function register()
    {

    }
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('social-feed.php'),
        ], 'config');
    }
    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        });
    }
    protected function routeConfiguration()
    {
        return [
            'prefix' => config('social-feed.prefix'),
            'middleware' => config('social-feed.middleware'),
        ];
    }
    protected function registerMigrations()
    {
        $this->publishes([
            __DIR__ . '/../database/migrations/create_social_feeds_table.php' => database_path('migrations/laravel-social-feed/' . date('Y_m_d_His', time()) . '_create_social_feeds_table.php'),
            __DIR__ . '/../database/migrations/create_social_feed_comments_table.php' => database_path('migrations/laravel-social-feed/' . date('Y_m_d_His', time()) . '_create_social_feed_comments_table.php')
        ], 'migrations');
    }
}
?>