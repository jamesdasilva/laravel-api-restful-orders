<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_id', 'name', 'price'];
    protected $dates = ['deleted_at'];

    function orders() {
        return $this->hasMany('App\Order');
    }
}
