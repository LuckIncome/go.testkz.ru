<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('articles', 'App\Http\Controllers\API\ArticleController');
Route::apiResource('blogs', 'App\Http\Controllers\API\BlogsController');
Route::apiResource('contact', 'App\Http\Controllers\API\ContactController');
Route::apiResource('menu', 'App\Http\Controllers\API\MenuController');
Route::apiResource('settings', 'App\Http\Controllers\API\SettingController');
Route::apiResource('page', 'App\Http\Controllers\API\PageController');
Route::apiResource('events', 'App\Http\Controllers\API\EventController');
Route::apiResource('partner', 'App\Http\Controllers\API\PartnerController');
Route::apiResource('about', 'App\Http\Controllers\API\AboutController');