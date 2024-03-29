<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
//    public function book()
//    {
//        return $this->belongsTo(Book::class, 'product_id');
//    }
    public function book()
    {
        return $this->belongsTo(Book::class, 'product_id', 'id');
    }
}
