<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\ControladorMain;
use App\Http\Controllers\HestiaUserController;

use App\Http\Controllers\MainController;
use App\Http\Controllers\ControladorPrueba;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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


Route::get('/',  [ControladorMain::class, "index"])->name("inicio");
/*Route::get('/adentro',function(){
    return redirect("/inicio");
})->name("adentro");*/
