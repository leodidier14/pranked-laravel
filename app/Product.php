<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function formattedPrice()
    {
        $price = $this->price / 100;

        return '€' . number_format($price, 2, '.', ' ');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_product');
    }

    public function sizes()
    {
        return $this->belongsToMany('App\Size', 'size_product');
    }

    public function styles()
    {
        return $this->belongsToMany('App\Style', 'style_product');
    }


}
