<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bookdetails;

class Book extends Model
{
    use HasFactory;

    public function bookDetail(){
        return $this->hasMany(Bookdetail::class,'bookid');
    }
}
