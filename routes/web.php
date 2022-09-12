<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Livewire\Admins\Countries\Countries;
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

Route::group(
    [
        'prefix' => (new Mcamara\LaravelLocalization\LaravelLocalization)->setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function () {
        Route::prefix('admin')->name('admin.')->group(function () {
            Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
            Route::get('country', Countries::class)->name('country');

        });
    });
