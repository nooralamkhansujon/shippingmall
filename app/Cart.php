<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['product_id','product_name','product_code','product_color','size','price','quantity','user_email','session_id'];

    public function product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
