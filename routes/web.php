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

//use Illuminate\Routing\Route;


Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('about', function () {
    return view('about');
});
*/
use App\Http\Controllers\PageController;

Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('team', [PageController::class, 'team'])->name('team');

Route::get('articles123', [PageController::class, 'articles123']);

// Название сущности в URL во множественном числе, контроллер в единственном



Route::get('articles', [ArticleController::class, 'index'])   ->name('articles.index');  // Старое обращение
Route::get('articles/create', [ArticleController::class, 'create'])   ->name('articles.create'); // Создание
Route::get('articles/{id}', [ArticleController::class, 'show'])   ->name('articles.show'); // Статья по идентификатору
Route::post('articles', [ArticleController::class, 'store'])   ->name('articles.store'); // Обработка данных формы

Route::get('articles/{articleId}/comments/{id}', function ($articleId, $id) {
    // ...
})->name('articles.comments.show');

/*
Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])  ->name('articles.edit'); // Редактирование


Route::patch('articles/{id}', [ArticleController::class, 'update'])   ->name('articles.update'); // Метод PATCH
*/
/*

*/