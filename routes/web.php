<?php

use App\Http\Controllers\admin\PostController as AdminPostController;
use App\Http\Controllers\admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\client\PostController as ClientPostController;
// use App\Http\Controllers\client\CategoryController as ClientCategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\UserController;
use App\Http\Controllers\auth\ResetPasswordController;
use App\Http\Controllers\client\ClientController;
use App\Http\Controllers\client\CommentController;
use App\Http\Controllers\admin\CommentController as AdminCommentController;
use Illuminate\Support\Facades\Route; 


Route::get('/',                     [ClientController::class, 'index'])->name('/');
Route::get('lien-he',               [ClientController::class, 'lienHe'])->name('lien-he');
Route::get('gioi-thieu',            [ClientController::class, 'gioiThieu'])->name('gioi-thieu');
Route::get('bai-viet/{slug}',       [ClientPostController::class, 'baiVietChiTiet'])->name('bai-viet-chi-tiet');
Route::get('danh-muc/{slug}',       [ClientPostController::class, 'baiVietDanhMuc'])->name('danh-muc');
Route::post('binh-luan',            [CommentController::class, 'store'])->name('binh-luan');
Route::get('/tim-kiem',             [ClientPostController::class, 'timKiem'])->name('tim-kiem');

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'IsAdmin'])
    ->group(function () {
        Route::get('/',                         [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/bai-viet-da-xoa',          [AdminPostController::class, 'postRecycle'])->name('bai-viet-da-xoa');
        Route::post('/khoi-phuc/{post}',        [AdminPostController::class, 'postRestore'])->name('restore');
        Route::get('/tai-khoan',                [UserController::class, 'index'])->name('tai-khoan');
        Route::get('/binh-luan-da-xoa',         [AdminCommentController::class, 'trash_can'])->name('binh-luan-da-xoa');
        Route::post('/khoi-phuc-binh-luan/{id}',[AdminCommentController::class, 'restore'])->name('khoi-phuc-binh-luan');
        Route::resource('bai-viet',AdminPostController::class);
        Route::resource('danh-muc',AdminCategoryController::class);
        Route::resource('binh-luan',AdminCommentController::class);
    });

Route::get('dang-nhap',         [LoginController::class, 'showLoginForm'])->name('dang-nhap');
Route::post('dang-nhap',        [LoginController::class, 'login']);
Route::post('dang-xuat',        [LoginController::class, 'logout'])->name('logout');
Route::get('dang-ky',           [RegisterController::class, 'showRegistrationForm'])->name('dang-ky');
Route::post('dang-ky',          [RegisterController::class, 'register']);
Route::get('quen-mat-khau',     [ResetPasswordController::class, 'showResetForm'])->name('quen-mat-khau');
Route::post('quen-mat-khau',    [ResetPasswordController::class, 'forgot']);
