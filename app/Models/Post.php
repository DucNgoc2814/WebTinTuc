<?php

namespace App\Models;

use App\Models\admin\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'slug',
        'content',
        'description',
        'views',
        'is_trending',
        'is_popular',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_popular' => 'boolean',
        'is_trending' => 'boolean',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
