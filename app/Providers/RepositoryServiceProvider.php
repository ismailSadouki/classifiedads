<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ {
    Ads\AdsInterface,
    Ads\AdsRepository,
    Favorites\FavoriteInterface,
    Favorites\FavoriteRepository,  
    Comments\CommentsInterface,
    Comments\CommentsRepository,
    Categories\CategoryInterface,
    Categories\CategoryRepository,
};

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            AdsInterface::class,
            AdsRepository::class
        );

        $this->app->bind(
            FavoriteInterface::class,
            FavoriteRepository::class
        );

        $this->app->bind(
            CommentsInterface::class,
            CommentsRepository::class
        );

        $this->app->bind(
            CategoryInterface::class,
            CategoryRepository::class
        );
    }
}
