<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable =['user_input_amount'];
    function relationwithproduct(){
        return $this->hasone(Product::class,'id','product_id');
    }
    function relationwithcolor(){
        return $this->hasone(Color::class,'id','color_id');
    }
    function relationwithsize(){
        return $this->hasone(Size::class,'id','size_id');
    }
}
