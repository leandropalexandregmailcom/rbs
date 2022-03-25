<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    AuthController,
    Auth\RegisterController,
    IncidentsController
};
Route::apiResource('user', UserController::class);
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('create', [RegisterController::class, 'create'])->name('create');
Route::apiResource('user', UserController::class);
Route::apiResource('incidents', IncidentsController::class);
Route::put('incidents', [IncidentsController::class, 'update'])->name('update');
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me',  [AuthController::class, 'me']);

    Route::apiResource('user', UserController::class);
    Route::apiResource('client', ClientController::class);
    Route::apiResource('company', CompanyController::class);
    Route::apiResource('grade', GradeController::class);
    Route::apiResource('history', HistoryController::class);
    Route::apiResource('service', ServiceController::class);
    Route::apiResource('comment', CommentController::class);
});
