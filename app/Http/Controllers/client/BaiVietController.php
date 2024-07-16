<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\BaiViet;
use App\Models\DanhMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaiVietController extends Controller
{
    public function baiVietChiTiet()
    {
        return view('client.bai-viet-chi-tiet');
    }
    public function baiVietDanhMuc(String $sku)
    {
        $data = DB::table('bai_viets')
            ->join('danh_mucs', 'danh_mucs.id', 'bai_viets.danh_muc_id')
            ->where('danh_mucs.ma', $sku)
            ->get();
        return view('client.bai-viet-danh-muc', compact('data'));
    }
}
