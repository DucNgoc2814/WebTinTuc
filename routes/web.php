<?php

use App\Http\Controllers\admin\PostController as AdminPostController;
use App\Http\Controllers\client\PostController as ClientPostController;
use App\Http\Controllers\client\CategoryController as ClientCategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\ResetPasswordController;
use App\Http\Controllers\client\ClientController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ClientController::class, 'index'])->name('/');
Route::get('lien-he', [ClientController::class, 'lienHe'])->name('lien-he');
Route::get('gioi-thieu', [ClientController::class, 'gioiThieu'])->name('gioi-thieu');
Route::get('bai-viet-chi-tiet', [ClientPostController::class, 'baiVietChiTiet'])->name('bai-viet-chi-tiet');
Route::get('danh-muc/{sku}', [ClientPostController::class, 'baiVietDanhMuc'])->name('danh-muc');

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'IsAdmin'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('bai-viet', AdminPostController::class);
    });

Route::get('dang-nhap', [LoginController::class, 'showLoginForm'])->name('dang-nhap');
Route::post('dang-nhap', [LoginController::class, 'login']);

Route::post('dang-xuat', [LoginController::class, 'logout'])->name('logout');

Route::get('dang-ky', [RegisterController::class, 'showRegistrationForm'])->name('dang-ky');
Route::post('dang-ky', [RegisterController::class, 'register']);

Route::get('quen-mat-khau', [ResetPasswordController::class,'showResetForm'])->name('quen-mat-khau');
// Route::get('quen-mat-khau', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
