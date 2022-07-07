<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttributes extends Model
{
    use HasFactory;
    public function attributeValues()
    {
        return $this->hasMany(AttributeValue::class,'product_attribute_id');
    }
}
