<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;


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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::middleware(['auth'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('admin')->group(function () {
        Route::middleware(['auth'])->group(function () {
            Route::prefix('products')->name('products.')->controller(ProductsController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::get('show/{id}', 'show')->name('show');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::put('update/{id}', 'update')->name('update');
                Route::post('store', 'store')->name('store');
            });

            Route::prefix('categories')->name('categories.')->controller(CategoriesController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('create', 'create')->name('create');
                Route::get('show/{slug}', 'show')->name('show');
                Route::get('edit/{slug}', 'edit')->name('edit');
                Route::post('store', 'store')->name('store');
                Route::put('update/{slug}', 'update')->name('update');
            });

            Route::controller(AdminController::class)->group(function () {
                Route::get('/', 'index')->name('admin.index');
            });
        });
});

