<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    function productRelation(){
        return $this->hasMany(Product::class, 'subcategory_id', 'id');
    }

}
