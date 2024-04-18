<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'parent_category_id',
        'category_id',
        'summary',
        'content',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
