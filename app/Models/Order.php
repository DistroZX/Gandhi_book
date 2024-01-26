<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

//    public function booksOder()
//    {
//        return $this->belongsTo(Book::class, 'product_id');
//    }


    public function book()
    {
        return $this->belongsTo(Book::class, 'product_id', 'id');
    }
    public function userOder()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
