<?php

namespace App\Providers;

use App\Application\Repositories\CollectPhotoSetInterface;
use App\Application\Repositories\PhotoSetDetailInterface;
use App\Application\Repositories\WantPhotoSetInterface;
use App\Application\UseCases\CollectList\UseCase as CollectListUseCase;
use App\Application\UseCases\WantList\UseCase as WantListUseCase;
use App\Application\UseCases\CollectList\UseCaseInput as CollectListUseCaseInput;
use App\Application\UseCases\PhotoSetDetail\UseCase as PhotoSetDetailUseCase;
use App\Application\UseCases\PhotoSetDetail\UseCaseInput as PhotoSetDetailUseCaseInput;
use App\Application\UseCases\WantList\UseCaseInput as WantListUseCaseInput;
use App\Gateways\CollectPhotoSetImpl;
use App\Gateways\PhotoSetDetailImpl;
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
        app()->singleton(PhotoSetDetailUseCaseInput::class, PhotoSetDetailUseCase::class);
        app()->singleton(CollectPhotoSetInterface::class, CollectPhotoSetImpl::class);
        app()->singleton(WantPhotoSetInterface::class, WantPhotoSetImpl::class);
        app()->singleton(PhotoSetDetailInterface::class, PhotoSetDetailImpl::class);
    }
}
