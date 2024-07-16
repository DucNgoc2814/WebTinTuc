<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'ma',
        'tieu_de',
        'noi_dung',
        'anh',
        'mo_ta',
        'luot_xem',
        'is_trending',
        'is_popular',
        'is_active',
        'danh_muc_id',
        'nguoi_dung_id'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_popular' => 'boolean',
        'is_trending' => 'boolean',
    ];
}
