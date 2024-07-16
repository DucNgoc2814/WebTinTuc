<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    use HasFactory;

    protected $fillable = [
        'ma',
        'ten',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
