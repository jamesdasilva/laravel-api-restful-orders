<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['product_id', 'product_user_id', 'date', 'quantity'];
    protected $dates = ['deleted_at'];

    function product() {
        return $this->belongsTo('App\Product');
    }

    function productUser() {
        return $this->belongsTo('App\ProductUser');
    }
}
