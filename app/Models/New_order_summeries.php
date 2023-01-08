<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class New_order_summeries extends Model
{
    use HasFactory;
    protected $fillable = ['payment_status'];
    function relation_order_detail(){
        return $this->hasMany(order_details::class,'order_summery_id','id');
    }
}
