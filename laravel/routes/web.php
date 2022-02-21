<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TheoryController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\ProgrammingController;
use App\Http\Controllers\UserController;

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

// Изначальный путь для перешедшего на сайт
Route::get('/', [MainController::class, 'index']);

// // Полный список запросов по теории через метод get
// Route::group(['prefix' => '/theory', 'middleware' => 'auth'], function() {
//     Route::get('/all', [TheoryController::class, 'showAll']) -> name('theory-all');
//     Route::get('/{name}', [TheoryController::class, 'showPart']) -> name('theory-part');
//     Route::get('/{name}/{id}', [TheoryController::class, 'showArticle']) -> name('theory-article');
//     Route::get('/{name}/{id}/edit', [TheoryController::class, 'showEditArticle']) -> name('theory-edit-article-view');
//     Route::get('/{name}/edit', [TheoryController::class, 'showEditSection']) -> name('theory-edit-section-view');
// });

// // Полный список запросов по теории через метод post
// Route::group(['prefix' => '/theory', 'middleware' => 'auth'], function() {
//     Route::post('/{name}/{id}/done', [TheoryController::class, 'setDone']) -> name('theory-done');
//     Route::post('/{name}/add', [TheoryController::class, 'addArticle']) -> name('theory-add-article');
//     Route::post('/{name}/{id}/edit', [TheoryController::class, 'editArticle']) -> name('theory-edit-article');
//     Route::post('/add', [TheoryController::class, 'addSection']) -> name('theory-add-section');
//     Route::post('/{name}/edit', [TheoryController::class, 'editSection']) -> name('theory-edit-section');
// });

// Полный список запросо по практике через метод get
Route::group(['prefix' => '/practice'], function() {
    // Route::get('/all', [PracticeController::class, 'showAll']) -> name('practice-all');
    Route::get('/{name}', [PracticeController::class, 'showPart']) -> name('practice-part');
    // Route::get('/{name}/{id}', [PracticeController::class, 'showTask']) -> name('practice-task');
    // Route::get('/{name}/{id}/edit', [PracticeController::class, 'showEditTask']) -> name('practice-edit-task-view');
    // Route::get('/{name}/edit', [PracticeController::class, 'showEditSection']) -> name('practice-edit-section-view');
});

// Полный список запросо по практике через метод post
Route::group(['prefix' => '/practice'], function() {
    Route::post('/{name}/{id}/done', [PracticeController::class, 'checkAnswer']) -> name('practice-done');
//     Route::post('/{name}/add', [PracticeController::class, 'addTask']) -> name('practice-add-task');
//     Route::post('/{name}/{id}/edit', [PracticeController::class, 'editTask']) -> name('practice-edit-task');
//     Route::post('/add', [PracticeController::class, 'addSection']) -> name('practice-add-section');
//     Route::post('/{name}/edit', [PracticeController::class, 'editSection']) -> name('practice-edit-section');
});

// // полный список запросов по программированию через метод get
// Route::group(['prefix' => '/programming', 'middleware' => 'auth'], function() {
//     Route::get('/all', [ProgrammingController::class, 'showAll']) -> name('programming-all');
//     Route::get('/{name}', [ProgrammingController::class, 'showPart']) -> name('programming-part');
//     Route::get('/{name}/{id}', [ProgrammingController::class, 'showArticle']) -> name('programming-task');
//     Route::get('/{name}/{id}/edit', [ProgrammingController::class, 'showEditTask']) -> name('programming-edit-task-view');
//     Route::get('/{name}/edit', [ProgrammingController::class, 'showEditSection']) -> name('programming-edit-section-view');
// });

// // полный список запросов по программированию через метод post
// Route::group(['prefix' => '/programming', 'middleware' => 'auth'], function() {
//     Route::post('/{name}/{id}/done', [ProgrammingController::class, 'setDone']) -> name('programming-done');
//     Route::post('/{name}/add', [ProgrammingController::class, 'addTask']) -> name('programming-add-task');
//     Route::post('/{name}/{id}/edit', [ProgrammingController::class, 'editTask']) -> name('programming-edit-task');
//     Route::post('/add', [ProgrammingController::class, 'addSection']) -> name('programming-add-section');
//     Route::post('/{name}/edit', [ProgrammingController::class, 'editSection']) -> name('programming-edit-section');
// });

// полный список запросов по пользователю через метод get
Route::group(['prefix' => '/user', 'middleware' => 'auth'], function() {
    // Route::get('/{username}', [UserController::class, 'showUser']) -> name('user-info');
    // Route::get('/{username}/settings', [UserController::class, 'showSettings']) -> name('user-settings');
    // Route::get('/{username}/level', [UserController::class, 'showLevel']) -> name('user-level');
    Route::get('/signout', [UserController::class, 'signout']) -> name('user-signout');
});

//Полный список незащищенных авторизацией путей пользователя через метод get
Route::group(['prefix' => '/user'], function() {
    Route::get('/signup', [UserController::class, 'showSignup']) -> name('user-signup-view');
    Route::get('/signin', [UserController::class, 'showSignin']) -> name('user-signin-view');
});

//Полный список незащищенных авторизацией путей пользователя через метод post
Route::group(['prefix' => '/user'], function() {
    Route::post('/signup/do', [UserController::class, 'signup']) -> name('user-signup');
    Route::post('/signin/do', [UserController::class, 'signin']) -> name('user-signin');
});

// // полный список запросов по пользователю через метод post
// Route::group(['prefix' => '/user', 'middleware' => 'auth'], function() {    
//     Route::post('/{username}/change-password', [UserController::class, 'changePassword']) -> name('user-change-password');
//     Route::post('/{username}/change-name', [UserController::class, 'changeName']) -> name('user-change-name');
// });

