<?php
use App\Http\Controllers\Clothing_ItemsController;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('clothing-items', Clothing_ItemsController::class);
});