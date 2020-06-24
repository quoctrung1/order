<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = ['id']; //Tat ca tru id
    protected $timestamp = true;
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
    public function brand(){
        return $this->belongsTo('App\Models\Brand');
    }
    public function product_detail()
    {
    	return $this->hasOne('App\Models\Product_detail');	
    }
} 
 