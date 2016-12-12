<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
     public function site()
    {
    	return $this->belongsTo(Site::class);
    }

      public function catalogue()
    {
    	return $this->belongsTo(Catalogue::class);
    }

      public function origin()
    {
    	return $this->belongsTo(Origin::class);
    } 

      public function creator()
    {
    	return $this->belongsTo(Creator::class);
    }

       public function model()
    {
    	return $this->belongsTo(Model::class);
    }

     public function collections()
    {
        return $this->belongsToMany(Collection::class, 'product_collections');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public function materials()
    {
        return $this->belongsToMany(Material::class, 'product_materials');
    }


}
