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

use App\Http\Controllers\SortearController;

Route::get('/', function () {
    return view('welcome');
});
route::get('/sortear', [SortearController::class, 'sortear'])->name('sortear');

route::get('/resultado', [SortearController::class, 'resultado'])->name('resultado');
