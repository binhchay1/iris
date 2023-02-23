<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
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

Route::get('/', [HomeController::class, 'viewHome'])->name('homepage');
Route::get('/product-detail/{name}', [HomeController::class, 'detailProduct'])->name('detail.product');
Route::get('/blog-detail/{title}', [HomeController::class, 'detailBlog'])->name('detail.blog');
Route::get('/product-list', [HomeController::class, 'listProduct'])->name('product');
Route::get('/blog-list', [HomeController::class, 'listBlog'])->name('blog');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'viewDashBoard'])->name('dashboard');

    Route::group(['prefix' => 'product'], function () {
        Route::get('/', [ProductController::class, 'listProductAdmin'])->name('admin.products.index');
        Route::get('/add', [ProductController::class, 'createProduct'])->name('admin.create.products');
        Route::get('/update/{product}', [ProductController::class, 'viewUpdateProduct'])->name('admin.update.products.view');
        Route::post('/update/{product}', [ProductController::class, 'updateProduct'])->name('admin.update.products');
        Route::post('/store', [ProductController::class, 'storeProduct'])->name('admin.store.products');
        Route::get('/delete/{id}', [ProductController::class, 'deleteProduct'])->name('admin.delete.products');
    });

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', [BlogController::class, 'listBlogAdmin'])->name('admin.blog.index');
        Route::get('/add', [BlogController::class, 'createBlog'])->name('admin.create.blog');
        Route::post('/store', [BlogController::class, 'storeBlog'])->name('admin.store.blog');
        Route::get('/update/{blog}', [BlogController::class, 'viewUpdateBlog'])->name('admin.update.blog.view');
        Route::post('/update/{blog}', [BlogController::class, 'updateBlog'])->name('admin.update.blog');
        Route::get('/delete/{id}', [BlogController::class, 'deleteBlog'])->name('admin.delete.blog');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
