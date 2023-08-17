<?php

namespace App\Providers;

use App\Repositories\Page\PageRepository;
use App\Repositories\Page\PageRepositoryInterface;
use App\Repositories\Story\StoryRepository;
use App\Repositories\Story\StoryRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(StoryRepositoryInterface::class, StoryRepository::class);
        $this->app->bind(PageRepositoryInterface::class, PageRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
