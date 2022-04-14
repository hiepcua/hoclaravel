<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

use App\Http\Controllers\UsersController;

// Admin
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;

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

// Client routes
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/san-pham', [HomeController::class, 'products'])->name('products');

Route::get('/them-san-pham', [HomeController::class, 'getAdd']);

Route::post('/them-san-pham', [HomeController::class, 'postAdd'])->name('post-add');

Route::put('/them-san-pham', [HomeController::class, 'putAdd']);

Route::get('demo-response', function(){
    // $response = response()
    // ->view('clients.demo-test', [
    //     'title' => 'Học HTTP Response',
    // ], 201)
    // ->header('Content-Type', 'application/json')
    // ->header('API-key', '123456');
    // return $response;

    // $contentArr = ['name'=>'Unicode', 'version'=>'Laravel 8.x', 'lesson'=>'HTTP Response Laravel'];
    // // return $contentArr;
    // return response()->json($contentArr, 201)->header('API-key', '123456');
    return view('clients.demo-test');
})->name('demo-response');

Route::post('demo-response', function(Request $request){
    if(!empty($request->username)){
        // return redirect()->route('demo-response')->with();
        return back()->withInput()->with('mess', 'Validate thành công');
    }

    return redirect(route('demo-response'))->with('mess', 'Validate không thành công');
});

Route::get('download-image', [HomeController::class, 'downloadImage'])->name('download-image');

Route::get('download-doc', [HomeController::class, 'downloadDoc'])->name('download-doc');

// Người dùng
Route::prefix('users')->name('users.')->group(function(){
    Route::get('/', [UsersController::class, 'index'])->name('index');

    Route::get('/add', [UsersController::class, 'add'])->name('add');

    Route::post('/add', [UsersController::class, 'postAdd'])->name('postAdd');

    Route::get('edit/{id}', [UsersController::class, 'getEdit'])->name('edit');

    Route::post('update', [UsersController::class, 'postEdit'])->name('post-edit');

    Route::get('/delete/{id}', [UsersController::class, 'delete'])->name('delete');
});


Route::prefix('categories')->group(function(){
    // Danh sách chuyên mục
    Route::get('/', [CategoriesController::class, 'index'])->name('categories.list');

    // Lấy chi tiết một chuyên mục (Áp dụng show form sửa chuyên mục)
    Route::get('/edit/{id}', [CategoriesController::class, 'getCategory'])->name('categories.edit');

    // Danh sách chuyên mục
    Route::post('/edit/{id}', [CategoriesController::class, 'updateCategory']);

    // Hiển thị form add dữu liệu
    Route::get('/add', [CategoriesController::class, 'addCategory'])->name('categories.add');

    // Xử lý thêm chuyên mục
    Route::post('/add', [CategoriesController::class, 'handleAddCategory']);

    // Xóa chuyên mục
    Route::delete('/delete/{id}', [CategoriesController::class, 'deleteCategory'])->name('categories.delete');

    // Hiển thị form upload
    Route::get('/upload', [CategoriesController::class, 'getFile']);

    // Xử lý file
    Route::post('/upload', [CategoriesController::class, 'handleFile'])->name('categories.upload');
});

// Admin routes
Route::middleware('auth.admin')->prefix('admin')->group(function(){
    Route::get('/', [DashboardController::class, 'index']);

    Route::get('/login', [AdminHomeController::class, 'loginForm']);

    Route::post('/login', [DashboardController::class, 'handleLogin']);

    Route::resource('products', ProductsController::class);
});