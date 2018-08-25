<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    public function product_type()
    {
    	return $this->belongsTo('App\Type_Products','id_type','id');
    }

    public function bill_detail()
    {
    	return $this->hasMany('App\Bill_Detail','id_product','id');
    }
}
