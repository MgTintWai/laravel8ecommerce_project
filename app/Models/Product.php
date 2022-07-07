<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function orderItems(){
        return $this->hasMany(OrderItem::class,'product_id');
    }
    public function subCategory(){
        return $this->belongsTo(subCategory::class,'subcategory_id');
    }
    public function attributeValues(){
        return $this->hasMany(AttributeValue::class,'product_id');
    }
}
