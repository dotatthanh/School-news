<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Casts\Attribute;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'parent_category_id',
        'category_id',
        'sub_category_id',
        'summary',
        'content',
        // 'slug',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
