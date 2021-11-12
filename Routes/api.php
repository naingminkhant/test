<?php

use Modules\Name\Http\Controllers\NameController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'name', 'as' => 'name.'], function () {
    Route::get('{name}', [NameController::class, 'show']);

    Route::post('/', [NameController::class, 'store']);
    Route::put('{name}', [NameController::class, 'update']);
    Route::delete('{name}', [NameController::class, 'destroy']);
});
