<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Bookdetail extends Model
{
    use HasFactory;
    public function book(){
        return $this->belongTo(Book::class,'bookid');
    }
}