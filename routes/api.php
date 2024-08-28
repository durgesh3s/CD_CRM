<?php

use App\Http\Controllers\ModuleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('crm/modules')->group(function () {
    Route::post('/module', [ModuleController::class, 'createModule'])->name('createmodule');
    Route::get('/details', [ModuleController::class,'moduledata'])->name('moduledata');
});
