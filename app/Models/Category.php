<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "categories";
    protected $guarded = [];

    public function post()
    {
        return $this->hasMany(Post::class);
    }
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function childrens()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    // thiét lập mối quan hệ trung gian để lấy bài đăng từ 1 danh mục cha 
    public function posts()
    {
        return $this->hasManyThrough(Post::class, Category::class, 'parent_id', 'category_id');
    }
}
