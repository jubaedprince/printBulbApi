<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    //relationships
    public function subcategories()
    {
        return $this->hasMany('App\Subcategory');
    }
}
