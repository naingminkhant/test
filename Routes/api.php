<?php

use Modules\Name\Http\Controllers\NameController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'name', 'as' => 'name.'], function () {
    Route::get('{name}', [NameController::class, 'show']);
    Route::post('save', [NameController::class, 'store']);

    Route::get('edit/{name}', [NameController::class, 'edit']);
    Route::put('update/{name}', [NameController::class, 'update']);
});
