<?php

use App\Http\Controllers\ChapterTwoController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

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

Route::get('test', [IndexController::class, 'form']);
Route::post('test', [IndexController::class, 'save']);

Route::get('/chapter2', function (){
    return 'Это первый маршрут в Части 2 домашней работы';
});

Route::get('/chapter3', function (){
    return 'Это второй маршрут в Части 2 домашней работы';
});

Route::redirect('/chapter3', '/chapter2');

Route::get('chapter4', [ChapterTwoController::class, 'chapterTwo']);
