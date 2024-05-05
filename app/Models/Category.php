<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'code',
        'name',
        'parent_category_id',
        'image',
        'description',
        // 'slug',
    ];

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }
}
