<?php

use App\Models\Author;
use App\Models\book;
use App\Models\client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AuthorsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/authors', [AuthorsController::class, 'index']);

Route::get('/test', function () {
    return book::first()->orders;
});
