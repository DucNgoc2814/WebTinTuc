<?php

use App\Http\Controllers\admin\BaiVietController as AdminBaiVietController;
use App\Http\Controllers\client\BaiVietController as ClientBaiVietController;
use App\Http\Controllers\client\DanhMucController as ClientDanhMucController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\client\ClientController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [ClientController::class, 'index'])->name('/');
Route::get('lien-he', [ClientController::class, 'lienHe'])->name('lien-he');
Route::get('gioi-thieu', [ClientController::class, 'gioiThieu'])->name('gioi-thieu');
Route::get('bai-viet-chi-tiet', [ClientBaiVietController::class, 'baiVietChiTiet'])->name('bai-viet-chi-tiet');
Route::get('danh-muc/{sku}', [ClientBaiVietController::class, 'baiVietDanhMuc'])->name('danh-muc');

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('bai-viet', AdminBaiVietController::class);
    });

Auth::routes();


