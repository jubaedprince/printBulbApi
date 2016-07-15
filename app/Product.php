<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'template'];

    //relationship
    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }
}
