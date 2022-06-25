<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/
Route::get('/', function() {
    print('I am an admin');
});

Route::get('/', [DashboardController::class, 'index']);

Route::get('/login', [AdminHomeController::class, 'loginForm']);

Route::post('/login', [DashboardController::class, 'handleLogin']);

Route::resource('products', ProductsController::class);