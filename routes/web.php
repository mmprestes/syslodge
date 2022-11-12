<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



// Controllers de negocio
use App\Http\Controllers\SecretariaController;
use App\Http\Controllers\ChancelariaController;
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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/secretaria', [SecretariaController::class, 'home'])->name('secretaria.home');
    Route::get('/chancelaria', [ChancelariaController::class, 'home'])->name('chancelaria.home');

});

require __DIR__.'/auth.php';
