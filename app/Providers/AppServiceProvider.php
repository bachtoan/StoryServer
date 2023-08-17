<?php

namespace App\Providers;

use App\Repositories\Content\ContentRepository;
use App\Repositories\Content\ContentRepositoryInterface;
use App\Repositories\Page\PageRepository;
use App\Repositories\Page\PageRepositoryInterface;
use App\Repositories\Sound\SoundRepository;
use App\Repositories\Sound\SoundRepositoryInterface;
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
        $this->app->bind(ContentRepositoryInterface::class, ContentRepository::class);
        $this->app->bind(SoundRepositoryInterface::class, SoundRepository::class);



    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
