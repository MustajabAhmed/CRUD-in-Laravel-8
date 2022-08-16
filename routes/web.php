<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('add', 'index');
Route::post('add/store', [StudentController::class, 'store']);
Route::get('add/store', [StudentController::class, 'store']);

// Route::view('show', 'show');
Route::get('/show', [StudentController::class, 'show']);

Route::get('/delete/{id}', [StudentController::class, 'delete']);

Route::get('/edit/{id}', [StudentController::class, 'edit']);
Route::post('/update/{id}', [StudentController::class, 'update']);
Route::get('/update/{id}', [StudentController::class, 'update']);

Route::get('/search', [StudentController::class, 'search']);