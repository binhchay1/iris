<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ServiceController;
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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'viewDashBoard'])->name('dashboard');
    Route::post('/upload-image', [AdminController::class, 'saveSlide'])->name('upload-image');
    Route::post('/upload-description', [AdminController::class, 'saveDescription'])->name('upload-description');
    Route::post('/upload-partner', [AdminController::class, 'savePartner'])->name('upload-partner');
    Route::post('/upload-social', [AdminController::class, 'saveSocial'])->name('upload-social');
    Route::post('/create-partner', [AdminController::class, 'createPartner'])->name('create-partner');
    Route::post('/delete-partner', [AdminController::class, 'deletePartner'])->name('delete-partner');

    Route::group(['prefix' => 'member'], function () {
        Route::get('/', [MemberController::class, 'listMemberAdmin'])->name('admin.members.index');
        Route::get('/add', [MemberController::class, 'createMember'])->name('admin.create.members');
        Route::get('/update/{member}', [MemberController::class, 'viewUpdateMember'])->name('admin.update.members.view');
        Route::post('/update/{member}', [MemberController::class, 'updateMember'])->name('admin.update.members');
        Route::post('/store', [MemberController::class, 'storeMember'])->name('admin.store.members');
        Route::get('/delete/{id}', [MemberController::class, 'deleteMember'])->name('admin.delete.members');
    });

    Route::group(['prefix' => 'service'], function () {
        Route::get('/', [ServiceController::class, 'listServiceAdmin'])->name('admin.services.index');
        Route::get('/add', [ServiceController::class, 'createService'])->name('admin.create.services');
        Route::get('/update/{service}', [ServiceController::class, 'viewUpdateService'])->name('admin.update.services.view');
        Route::post('/update/{service}', [ServiceController::class, 'updateService'])->name('admin.update.services');
        Route::post('/store', [ServiceController::class, 'storeService'])->name('admin.store.services');
        Route::get('/delete/{id}', [ServiceController::class, 'deleteService'])->name('admin.delete.services');
    });
});

require __DIR__ . '/auth.php';
