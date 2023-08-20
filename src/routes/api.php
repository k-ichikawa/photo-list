<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WantListController;
use App\Http\Controllers\Api\CollectListController;

Route::get('want-list', [WantListController::class, 'index']);
Route::get('collect-list', [CollectListController::class, 'index']);
