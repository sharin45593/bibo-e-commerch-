<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    use HasFactory;
    protected $fillable =['payment_status'];
    public function relationwithproduct(){
        return $this->hasOne(product::class, 'id', 'product_id');
    }
    public function relationwithcolor(){
        return $this->hasOne(Color::class, 'id', 'color_id');
    }
    public function relationwithsize(){
        return $this->hasOne(Size::class, 'id', 'size_id');
    }
    public function relationwithnewordersummery(){
        return $this->hasOne(new_order_summeries::class, 'id', 'order_summery_id');
    }
}
