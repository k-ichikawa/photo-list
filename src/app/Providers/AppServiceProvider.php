<?php

namespace App\Providers;

use App\Application\Repositories\CollectPhotoSet;
use App\Application\Repositories\WantPhotoSet;
use App\Application\UseCases\CollectList\UseCase as CollectListUseCase;
use App\Application\UseCases\WantList\UseCase as WantListUseCase;
use App\Application\UseCases\CollectList\UseCaseInput as CollectListUseCaseInput;
use App\Application\UseCases\WantList\UseCaseInput as WantListUseCaseInput;
use App\Gateways\CollectPhotoSetImpl;
use App\Gateways\WantPhotoSetImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        \Laravel\Sanctum\Sanctum::ignoreMigrations();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        app()->singleton(CollectListUseCaseInput::class, CollectListUseCase::class);
        app()->singleton(WantListUseCaseInput::class, WantListUseCase::class);
        app()->singleton(CollectPhotoSet::class, CollectPhotoSetImpl::class);
        app()->singleton(WantPhotoSet::class, WantPhotoSetImpl::class);
    }
}
