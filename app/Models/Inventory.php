<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    function relationwithcolor(){
        return $this->hasone(Color::class,'id','color_id');
    }
    function relationwithsize(){
        return $this->hasone(Size::class,'id','size_id');
    }
    function relationwithproduct(){
        return $this->hasone(product::class,'id','product_id');
    }
}
