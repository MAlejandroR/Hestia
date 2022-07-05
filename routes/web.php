<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\ControladorMain;

use App\Http\Controllers\MainController;
use App\Http\Controllers\ControladorPrueba;

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





Route::get('/',  [ControladorMain::class, "index"]);

Route::get('/prueba1',  [ControladorMain::class, "prueba1"]);

//Route::get('/',  function () {u
//    return Inertia::render('Inicio', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});
Route::get("p1", [ControladorPrueba::class,"p1"])->name("v1");
Route::get("p2", [ControladorPrueba::class,"p2"])->name("v2");
Route::get('/p', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::inertia("login","Auth/Login")->name("login");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
