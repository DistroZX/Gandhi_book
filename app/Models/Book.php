<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function images()
    {
        return $this->hasMany(Image::class, 'product_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId');
    }

    public function author()
    {
        return $this->belongsTo(Author::class, 'authorId');
    }
    public function order()
    {
        return $this->belongsTo(Order::class, 'product_id');
    }



}
