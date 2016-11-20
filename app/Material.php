<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_materials');
    }
}
