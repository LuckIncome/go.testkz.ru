<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\FeedbackController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::post('/eventback', [FeedbackController::class,'eventback'])->name('eventback');
Route::post('/feedback', [FeedbackController::class,'feedback'])->name('feedback');
Route::post('/subscribe', [FeedbackController::class,'subscribe'])->name('subscribe');

Route::get('/locale/{lang}',[PagesController::class,'setLocale'])->name('locale.set');

Route::group(['prefix' => 'blog'], function() {
    Route::get('/', [BlogsController::class, 'index'])->name('blog'); 
    Route::get('/{article}', [BlogsController::class, 'show'])->name('blog.show');   
});

Route::group(['prefix' => 'news'], function() {
    Route::get('/', [NewsController::class, 'index'])->name('news'); 
    Route::get('/{article}', [NewsController::class, 'show'])->name('news.show');   
});

Route::group(['prefix' => 'event'], function() {
    Route::get('/', [EventsController::class, 'index'])->name('event'); 
    Route::get('/{article}', [EventsController::class, 'show'])->name('event.show');   
});

Route::get('/{page?}',[PagesController::class,'getPage'])->name('pages.get');