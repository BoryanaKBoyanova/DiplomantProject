<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('index');
});



Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/dashboard',[\App\Http\Controllers\TasksController::class, 'index'])->name('dashboard');

Route::get('/show', [ProjectsController::class, 'index']);


Route::get('/create',[ProjectsController::class, 'add']);
Route::post('/create',[ProjectsController::class, 'create']);

Route::get('/edit/{edit}', [ProjectsController::class, 'edit']);
Route::put('/edit/{edit}', [ProjectsController::class, 'update']);
Route::post('/edit/{edit}', [ProjectsController::class, 'delete']);

Route::get('/search', [ProjectsController::class, 'search']);
});
