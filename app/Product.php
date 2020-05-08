<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = ['name', 'brand', 'publisher', 'code',
                        'availability', 'description', 'price','body',
                        'small_body','showhide','picture','status',
                        'user_id','catalog_id', 'author', 'rating',
                        'year', 'isbn', 'weight', 'pages'];

    public function catalogs(){

        return $this->belongsTo('App\Catalog','catalog_id');

    }

    protected static function booted()
    {
        static::created(function ($product) {
            //
        });
    }



}
