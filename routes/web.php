<?php

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

use App\Http\Controllers\ArticleController; // Новое добавление

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('about', function () {
    return view('about');
});
*/
use App\Http\Controllers\PageController;

Route::get('about', [PageController::class, 'about']);
Route::get('team', [PageController::class, 'team']);

Route::get('articles123', [PageController::class, 'articles123']);

// Название сущности в URL во множественном числе, контроллер в единственном
Route::get('articles', [ArticleController::class, 'index'])   ->name('articles.index');  // Старое обращение
Route::get('articles/{id}', [ArticleController::class, 'show'])   ->name('articles.show'); // Новое обращение
/*
Route::get('articles/{articleId}/comments/{id}', function ($articleId, $id) {
    // ...
})->names('articles.comments.show');
*/