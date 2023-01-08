<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;
    function relationtocountry(){
        return $this->hasOne(country::class,'id','country_id');
    }

}
