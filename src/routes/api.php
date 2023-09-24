<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WantListController;
use App\Http\Controllers\Api\CollectListController;
use App\Http\Controllers\Api\PhotoSetDetailController;

Route::get('want-list', [WantListController::class, 'index']);
Route::get('collect-list', [CollectListController::class, 'index']);
Route::post('photo-set-detail', [PhotoSetDetailController::class, 'index']);
